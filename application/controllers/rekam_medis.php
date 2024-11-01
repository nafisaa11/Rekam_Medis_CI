<?php

class Rekam_medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RekamMedis_model'); // Nama model harus sama persis
    }

    public function main()
    {
        $data['judul'] = 'Halaman Utama';
        $data['pasien'] = $this->RekamMedis_model->getAllPasien();
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/main', $data);
        $this->load->view('template/footer');
    }

    public function tambahPasien()
    {
        $data['judul'] = 'Halaman Tambah Pasien';
        // $data['pasien'] = $this->RekamMedis_model->tambahPasien();
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/TambahPasien', $data);
        $this->load->view('template/footer');
    }
}

?>
