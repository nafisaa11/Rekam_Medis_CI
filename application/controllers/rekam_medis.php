<?php

class Rekam_medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RekamMedis_model'); // Nama model harus sama persis
        $this->load->library('IdGenerator');
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
    
        if ($this->input->post()) { // Check if the form is submitted
            $this->RekamMedis_model->tambahDataPasien(); // Call the model to save the data
            // Redirect or load a view after insertion
            redirect('rekam_medis/main'); // Change to your desired redirect
        }
    
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/TambahPasien', $data);
        $this->load->view('template/footer');
    }
    

    public function inputRekamMedis()
    {
        $data['judul'] = 'Halaman Tambah Rekam Medis';

        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/inputRekamMedis');
        $this->load->view('template/footer');
    }

}

?>