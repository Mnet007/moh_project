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
    public partial class FacultyCoordinatorToNewInstructor : Form
    {
        public FacultyCoordinatorToNewInstructor()
        {
            InitializeComponent();
        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void FacultyCoordinatorToNewInstructor_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Update successfully");
        }

        private void button2_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Saved successfully");
            
            this.textBox1.Text = "Instructor Name";
            this.textBox2.Text = "Department";
            this.textBox3.Text = "Instructor ID";
            this.textBox5.Text = "salary"; 
        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
