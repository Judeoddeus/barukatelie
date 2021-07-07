using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SistemaCadastroCliente
{
    public partial class frmClientesListar : Form
    {
        public frmClientesListar()
        {
            InitializeComponent();
        }

        private void gridClientes_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                string nomeBuscar = txtBuscarNome.Text;
                conexao.Open();
                string sqlSelecionar = $"SELECT * FROM cadastro_cliente WHERE nome LIKE '%{nomeBuscar}%'";
                MySqlDataAdapter da = new MySqlDataAdapter(sqlSelecionar, conexao);
                DataTable dt = new DataTable();
                da.Fill(dt);
                gridClientes.DataSource = dt;
                conexao.Close();
            }
            catch(MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }

        private void btnNovoCliente_Click(object sender, EventArgs e)
        {
            frmClientes formulario = new frmClientes();
            formulario.ShowDialog();
        }

        private void frmClientesListar_Load(object sender, EventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string sqlSelecionar = "SELECT * FROM cadastro_cliente";                
                MySqlDataAdapter da = new MySqlDataAdapter(sqlSelecionar, conexao);
                DataTable dt = new DataTable();
                da.Fill(dt);
                gridClientes.DataSource = dt;
                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string nomeBuscar = txtBuscarNome.Text;
                string sqlSelecionar = $"SELECT * FROM cadastro_cliente WHERE nome LIKE '%{nomeBuscar}%'";
                MySqlDataAdapter da = new MySqlDataAdapter(sqlSelecionar, conexao);
                DataTable dt = new DataTable();
                da.Fill(dt);
                gridClientes.DataSource = dt;
                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }

        private void txtBuscarNome_TextChanged(object sender, EventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string nomeBuscar = txtBuscarNome.Text;
                string sqlSelecionar = $"SELECT * FROM cadastro_cliente WHERE nome LIKE '%{nomeBuscar}%'";
                MySqlDataAdapter da = new MySqlDataAdapter(sqlSelecionar, conexao);
                DataTable dt = new DataTable();
                da.Fill(dt);
                gridClientes.DataSource = dt;
                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }

        }
    }
}
