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
    public partial class FacultyCoordinator : Form
    {
        public FacultyCoordinator()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            FacultyCoordinatorToNewInstructor FacNi = new FacultyCoordinatorToNewInstructor();
            this.Hide();
            FacNi.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            FacultyCoordinatorToNewStudent FacNs = new FacultyCoordinatorToNewStudent();
            this.Hide();
            FacNs.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            FacultyCoordinatorToNewInstructor FacNi = new FacultyCoordinatorToNewInstructor();
            this.Hide();
            FacNi.Show();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            FacultyCoordinatorAssignInstructorToStudent FacTi = new FacultyCoordinatorAssignInstructorToStudent();
            this.Hide();
            FacTi.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            FacultyCoordinatorAssignCourseToInstructor FacTi = new FacultyCoordinatorAssignCourseToInstructor();
            this.Hide();
            FacTi.Show();
        }
    }
}
