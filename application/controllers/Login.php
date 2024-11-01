<?php

class Login extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Login';

        $this->load->view('template/header', $data);
        $this->load->view('Login/index');
        $this->load->view('template/footer');
    }
}
