namespace DBWinFormsApp
{
    public partial class MainForm : Form
    {
        public MainForm()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            LoginForm std = new LoginForm();
            this.Hide();
            std.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            LoginForm ins = new LoginForm();
            this.Hide();
            ins.Show();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            LoginForm fac = new LoginForm();
            this.Hide();
            fac.Show();
        }
    }
}