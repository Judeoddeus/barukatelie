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
    public partial class frmMedidasClientes : Form
    {
        public frmMedidasClientes()
        {
            InitializeComponent();
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            
            string bancoDeDados = "server=localhost;user id=root;password=;database=baruk_atelie;";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();

                string medidasCliente = txtNomeTabMedidas.Text;
                string sqlBuscar = $"SELECT * FROM `cadastro_medidas_cliente` WHERE nome = '{medidasCliente}'";
                
                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(sqlBuscar, conexao);
                da.Fill(dt);

                txtBusto.Text = dt.Rows[0]["busto"].ToString();
                txtCintura.Text = dt.Rows[0]["cintura"].ToString();
                txtQuadril.Text = dt.Rows[0]["quadril"].ToString();
                txtOmbroOmbro.Text = dt.Rows[0]["ombro_a_ombro"].ToString();
                txtOmbro.Text = dt.Rows[0]["ombro"].ToString();
                txtColarinho.Text = dt.Rows[0]["colarinho"].ToString();
                txtCavasFrt.Text = dt.Rows[0]["entreCavasFrt"].ToString();
                txtCentroFrt.Text = dt.Rows[0]["centroFrt"].ToString();
                txtCavaCst.Text = dt.Rows[0]["entreCavasCst"].ToString();
                txtCentroCst.Text = dt.Rows[0]["centroCst"].ToString();
                txtAltBusto.Text = dt.Rows[0]["alt_busto"].ToString();
                txtSepBusto.Text = dt.Rows[0]["separacaoBusto"].ToString();


                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }
    }
}
