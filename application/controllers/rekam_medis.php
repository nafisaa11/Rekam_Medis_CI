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
            $this->session->set_userdata('keyword', $data['keyword']);
            redirect('Rekam_medis/main'); // Reload the page to reset pagination
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // Config
        $config['base_url'] = site_url('Rekam_medis/main');
        $config['per_page'] = 5;
        $data['start'] = $this->uri->segment(3, 0); // Default start if not specified

        if ($data['keyword']) {
            // Get data with search keyword
            $config['total_rows'] = $this->RekamMedis_model->countPasien($data['keyword']);
            $data['pasien'] = $this->RekamMedis_model->getPasien($config['per_page'], $data['start'], $data['keyword']);
        } else {
            // Get all data without search keyword
            $config['total_rows'] = $this->RekamMedis_model->countAllPasien();
            $data['pasien'] = $this->RekamMedis_model->getPasien($config['per_page'], $data['start']);
        }

        $this->pagination->initialize($config);

        // Load views
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/main', $data);
        $this->load->view('template/footer');
    }

    public function tambahPasien()
    {
        $data['judul'] = 'Halaman Tambah Pasien';

        $this->RekamMedis_model->tambahPasien();
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

    public function detail($id)
    {
        $data['judul'] = 'Halaman Detail Rekam Medis';
        
        // Mengambil data pasien
        $data['pasien'] = $this->RekamMedis_model->getDetailPasien($id);
        
    
        // Mengambil data rekam medis berdasarkan ID pasien
        $data['rekam_medis'] = $this->RekamMedis_model->getRekamMedisByPasien($id);
    
        // Memuat view dengan data yang telah diambil
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/detail', $data);
        $this->load->view('template/footer');
    }
    

}
