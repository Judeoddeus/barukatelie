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
    public partial class frmPrincipal : Form
    {
        public frmPrincipal()
        {
            InitializeComponent();
        }

        private void listagemToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmClientesListar formulario = new frmClientesListar();
            formulario.ShowDialog();
        }

        private void novoClienteToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmClientes formulario = new frmClientes();
            formulario.ShowDialog();
        }

        private void frmPrincipal_Load(object sender, EventArgs e)
        {

        }

        private void clientesToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

        private void alterarToolStripMenuItem_Click(object sender, EventArgs e)
        {
        }

        private void alterarClienteToolStripMenuItem_Click(object sender, EventArgs e)
        {

            frmClientesAlterar formulario = new frmClientesAlterar();
            formulario.ShowDialog();
        }

        private void mostrarMedidasToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmMedidasClientes formulario = new frmMedidasClientes();
            formulario.ShowDialog();
        }
    }
}
