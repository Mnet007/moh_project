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
    public partial class Instructor : Form
    {
        public Instructor()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            InstructorPersonalDetails ins = new InstructorPersonalDetails();
            this.Hide();
            ins.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            InstructorRegStudentToCourse ins = new InstructorRegStudentToCourse();
            this.Hide();
            ins.Show();
        }
    }
}
