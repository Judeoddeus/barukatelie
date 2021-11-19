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

               if(txtNomeTabMedidas.Text == string.Empty)
                {
                    MessageBox.Show("Preencha o campo nome");
                    
                }
                else
                {
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
                    txtAltFrente.Text = dt.Rows[0]["alt_frente"].ToString();
                    txtAltCosta.Text = dt.Rows[0]["alt_costa"].ToString();
                    txtAltQuadril.Text = dt.Rows[0]["alt_quadril"].ToString();
                    txtGanchoFrt.Text = dt.Rows[0]["alt_ganchoFrt"].ToString();
                    txtGanchoCst.Text = dt.Rows[0]["alt_ganchoCst"].ToString();
                    txtCintJoelho.Text = dt.Rows[0]["alt_cintJoelho"].ToString();
                    txtAltCintTorn.Text = dt.Rows[0]["alt_cintTorno"].ToString();
                    txtLagJoelho.Text = dt.Rows[0]["largJoelho"].ToString();
                    txtCumpBraco.Text = dt.Rows[0]["cumpBraco"].ToString();
                    txtLargBraco.Text = dt.Rows[0]["largBraco"].ToString();
                    txtPunho.Text = dt.Rows[0]["punho"].ToString();
                    txtManga3_4.Text = dt.Rows[0]["alt_manga3_4"].ToString();
                    txtMangaCurta.Text = dt.Rows[0]["alt_mangaCurta"].ToString();
                    
                }
                

                

                conexao.Close();
            }
            catch (MySqlException erro)
            {
                MessageBox.Show("A conexão falhou." + erro.Message, "Erro na conexão.");
            }
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            string bancoDeDados = "server=localhost;user id=root; password=;database=baruk_atelie";
            MySqlConnection conexao = new MySqlConnection(bancoDeDados);

            try
            {
                conexao.Open();
                string sqlSalvar = $"INSERT INTO cadastro_medidas_cliente (nome, busto, cintura, quadril, ombro_a_ombro, ombro, colarinho, entreCavasFrt, centroFrt, entreCavasCst, centroCst, alt_busto, separacaoBusto, alt_frente, alt_costa, alt_quadril, alt_gancho, alt_ganchoFrt, alt_ganchoCst, alt_cintJoelho, alt_cintTorno, largJoelho, cumpBraco, largBraco, punho, alt_manga3_4, alt_mangaCurta, alt_saia, id_login_cliente) " +
                    $"VALUES ('{txtNomeTabMedidas.Text}','{txtAltBusto.Text}','{txtCintura.Text}','{txtQuadril.Text}','{txtOmbroOmbro.Text}','{txtOmbro.Text}','{txtColarinho.Text}','{txtCavasFrt.Text}','{txtCentroCst.Text}','{txtAltBusto.Text}','{txtSepBusto.Text}','{txtAltFrente.Text}','{txtAltCosta.Text}','{txtAltQuadril.Text}','{txtGanchoCst.Text}','{txtGanchoFrt.Text}','{txtCintJoelho.Text}','{txtAltCintTorn.Text}','{txtLagJoelho.Text}','{txtLargBraco.Text}','{txtCumpBraco.Text}','{txtLargBraco.Text}','{txtPunho.Text}','{txtManga3_4.Text}','{txtMangaCurta.Text}')";

                MySqlCommand cmd = new MySqlCommand();
                cmd.Connection = conexao;
                cmd.CommandText = sqlSalvar;
                cmd.ExecuteNonQuery();
                conexao.Close();
                MessageBox.Show("Cadastrado com sucesso.");
            }
        }
    }
}
