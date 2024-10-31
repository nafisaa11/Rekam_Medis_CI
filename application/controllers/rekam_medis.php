<?php

class Rekam_medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RekamMedis_model'); // Nama model harus sama persis
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['pasien'] = $this->RekamMedis_model->getAllPasien(); // Pemanggilan model yang benar
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/main', $data);
        $this->load->view('template/footer');
    }

    public function coba()
    {
        $data['judul'] = 'Coba';
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/coba');
        $this->load->view('template/footer');
    }
}

?>
