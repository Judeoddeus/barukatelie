using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace SistemaCadastroCliente
{
    public partial class frmClientesAlterar : Form
    {
        public frmClientesAlterar()
        {
            InitializeComponent();
        }

        private void txtID_TextChanged(object sender, EventArgs e)
        {

        }

        private void frmClientesAlterar_Load(object sender, EventArgs e)
        {
           
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie;";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string sqlAlterar = $"UPDATE cadastro_cliente SET nome='{txtNomeAlterar.Text}', email='{txtEmailAlterar.Text}', telefone='{txtTelefoneAlterar.Text}' WHERE id={txtID.Text}";
                MySqlCommand cmd = new MySqlCommand();
                cmd.Connection = conexao;
                cmd.CommandText = sqlAlterar;
                cmd.ExecuteNonQuery();
                conexao.Close();
                MessageBox.Show("Alterado com sucesso.");
            }
            catch(MySqlException erro)
            {
                MessageBox.Show("Algo deu errado. Erro: " + erro.Message);
            }
        }

        private void btnCarregar_Click(object sender, EventArgs e)
        {
            string idcliente = txtID.Text;
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie;";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string sqlBuscar = $"SELECT * FROM cadastro_cliente WHERE id={idcliente}";
                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(sqlBuscar, conexao);
                da.Fill(dt);
                txtNomeAlterar.Text =  dt.Rows[0]["nome"].ToString();
                txtEmailAlterar.Text = dt.Rows[0]["email"].ToString();
                txtTelefoneAlterar.Text = dt.Rows[0]["telefone"].ToString();
                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            string idcliente = txtID.Text;
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie;";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                
                string sqlExcluir = $"DELETE FROM cadastro_cliente WHERE id={idcliente}";
                
                MySqlCommand cmd = new MySqlCommand();
                cmd.Connection = conexao;
                cmd.CommandText = sqlExcluir;
                cmd.ExecuteNonQuery();
                conexao.Close();
                MessageBox.Show("Excluído com sucesso.");
                txtNomeAlterar.Clear();
                txtEmailAlterar.Clear();
                txtTelefoneAlterar.Clear();
                txtID.Clear();

                
                
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("Erro na conexão. Erro: " + erro.Message);
            }
        }
    }
}
