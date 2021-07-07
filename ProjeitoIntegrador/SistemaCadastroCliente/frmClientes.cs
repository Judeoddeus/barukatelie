using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SistemaCadastroCliente
{
    public partial class frmClientes : Form
    {
        public frmClientes()
        {
            InitializeComponent();
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {

            SalvarCliente(txtNome.Text, txtTelefone.Text, txtEmail.Text);
            LimparFormulario();
           if (MessageBox.Show("Inserir Medidas?", "Tabela de Medidas", MessageBoxButtons.OKCancel) == DialogResult.OK)
            {
                frmMedidasClientes formulario = new frmMedidasClientes();
                formulario.ShowDialog();
            }
        }

        private void LimparFormulario()
        {
           
            txtNome.Clear();
            txtEmail.Clear();
            txtTelefone.Clear();
        }

        private void SalvarCliente(string nome, string telefone, string email)
        {
            //StreamWriter arquivo;
            //string caminho = "C:\\sistema1\\clientes.txt";
            //arquivo = File.AppendText(caminho);
            //arquivo.WriteLine("Nome: " + nome + " - Telefone: " + telefone + " Email: " + email + " Senha: "+ senha);
            //arquivo.WriteLine(" ");
            //arquivo.Close();
             
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie";
            
            //objeto de conexão
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            //tratamento de conexão
            try
            {   //abrindo conexão
                conexao.Open();

                //objeto que vai um comando sql e vai executar
                MySqlCommand cmd = new MySqlCommand();

                //informa o objeto de conexão para o cmd
                cmd.Connection = conexao;

                //informa o sql que será executado
                cmd.CommandText = $"INSERT INTO cadastro_cliente(nome, email, telefone) VALUES('{nome}', '{email}', '{telefone}')";

                //executa o sql
                cmd.ExecuteNonQuery();

                // fecha a conexão
                conexao.Close();
                MessageBox.Show("Cadastro realizo com sucesso!");

            }
            catch (MySqlException erro)
            {
                MessageBox.Show("Não foi possível conectar ao banco de dados." + erro.Message);
            }

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void txtNome_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
