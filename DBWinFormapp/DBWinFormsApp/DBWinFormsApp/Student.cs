using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DBWinFormsApp
{
    public partial class Student : Form
    {
        public Student()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            StudentPersonalDetails stdInf = new StudentPersonalDetails();
            this.Hide();
            stdInf.Show();
        }
    }
}
