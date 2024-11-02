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

        // Load library
        $this->load->library('pagination');

        // Get search keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            // Reset start data if searching
            $data['start'] = 0;
        } else {
            $data['keyword'] = $this->input->get('keyword', true);
        }

        // Config
        $config['base_url'] = 'http://localhost/coba/Rekam_medis/main';
        $config['total_rows'] = $this->RekamMedis_model->countAllPasien();
        $config['per_page'] = 5;

        // Check if searching, then disable pagination
        if ($data['keyword']) {
            $config['total_rows'] = count($this->RekamMedis_model->getPasien(null, null, $data['keyword']));
            $data['pasien'] = $this->RekamMedis_model->getPasien(null, null, $data['keyword']);
        } else {
            $this->pagination->initialize($config);
            $data['start'] = $this->uri->segment(3, 0);
            $data['pasien'] = $this->RekamMedis_model->getPasien($config['per_page'], $data['start']);
        }

        // Load views
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/main', $data);
        $this->load->view('template/footer');
    }


    public function tambahPasien()
    {
        $data['judul'] = 'Halaman Tambah Pasien';

        $data['pasien'] = $this->RekamMedis_model->tambahPasien();
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/TambahPasien');
        $this->load->view('template/footer');
    }

<<<<<<< HEAD
    public function inputRekamMedis()
    {
        $data['judul'] = 'Halaman Tambah Rekam Medis';

        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/inputRekamMedis');
=======
    public function detail()
    {
        $data['judul'] = 'Halaman Detail Rekam Medis';

        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/detail');
>>>>>>> 8b5ce87167bd1cad045c084a3ceeb92a023d8615
        $this->load->view('template/footer');
    }

}

?>