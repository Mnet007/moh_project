using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace DBWinFormsApp
{
    public partial class LoginForm : Form
    {
        public LoginForm()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            FacultyCoordinator logFac = new FacultyCoordinator();
            this.Hide();
            logFac.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            MainForm Mf = new MainForm();
            this.Hide();
            Mf.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Instructor logIns = new Instructor();
            this.Hide();
            logIns.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Student logStd = new Student();
            this.Hide();
            logStd.Show();
        }
    }
}
