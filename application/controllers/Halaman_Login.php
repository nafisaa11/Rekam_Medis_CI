<?php

class Halaman_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model'); // Load the model for login
        $this->load->library('form_validation'); // Load form validation library
        $this->load->library('session'); // Load session library for managing user sessions
    }

    public function index()
    {
        $this->load->view('Halaman_Login/index');
    }

    public function login()
    {
        // Set form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Check if form validation passes
        if ($this->form_validation->run() == FALSE) {
            // Reload login page if validation fails
            $data['judul'] = 'Halaman Login';
            $this->load->view('template/header', $data);
            $this->load->view('Halaman_Login/index');
            $this->load->view('template/footer');
        } else {
            // Retrieve input data
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Check login credentials using the model
            $user = $this->Login_model->login($username, $password);

            if ($user) {
                // Set session data for successful login
                $this->session->set_userdata('username', $username);
                redirect(base_url('Rekam_medis/main')); // Redirect to the main page if login is successful
            } else {
                // Set flash message for invalid login and redirect to login page
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('Halaman_Login/index'));
            }
        }
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->unset_userdata('user_data');  // Hapus data user
        $this->session->sess_destroy();               // Hapus semua sesi
        
        // Redirect ke halaman login atau halaman utama
        redirect('Halaman_Login/index'); // ganti 'auth/login' dengan route login Anda
    }
}
?>
