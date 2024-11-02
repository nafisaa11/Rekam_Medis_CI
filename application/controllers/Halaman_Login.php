<?php

class Halaman_Login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Login';
        $this->load->view('template/header', $data);
        $this->load->view('Halaman_Login/index');
        $this->load->view('template/footer');
    }
}



?>