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
    
        if ($this->input->post()) {
            $this->RekamMedis_model->tambahDataPasien();
            redirect('rekam_medis/main');
        }
    
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/TambahPasien', $data);
        $this->load->view('template/footer');
    }
    

    public function tambahRekamMedis()
    {
        $data['judul'] = 'Halaman Tambah Rekam Medis';
    
        // Ambil ID pasien dari URL
        $id_pasien = $this->uri->segment(3); 
        $data['ID_Pasien'] = $id_pasien; 
    
        // Jika form disubmit
        if ($this->input->post()) { 
            // Ambil ID_Pasien dari input hidden
            $id_pasien = $this->input->post('ID_pasien'); 
            
            // Simpan data rekam medis
            $this->RekamMedis_model->tambahDataRekamMedis($id_pasien);
            
            // Redirect ke halaman detail pasien setelah menyimpan
            redirect('Rekam_medis/detail/' . $id_pasien);
        }
    
        // Load view untuk form input rekam medis
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/inputRekamMedis', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Halaman Detail Rekam Medis';
        
        $data['pasien'] = $this->RekamMedis_model->getDetailPasien($id);
        
        $data['rekam_medis'] = $this->RekamMedis_model->getRekamMedisByPasien($id);
    
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Rekam Medis';
        // Ambil data rekam medis berdasarkan ID yang diterima
        $data['rekam_medis'] = $this->RekamMedis_model->getRekamMedisById($id);

        // Jika form disubmit
        if ($this->input->post('submit')) {
            $this->RekamMedis_model->editDataRekamMedis($id);
            redirect('Rekam_medis/detail/' . $this->input->post('ID_Pasien')); // Redirect ke detail pasien setelah penyimpanan
        }

        // Load views
        $this->load->view('template/header', $data);
        $this->load->view('Rekam_medis/edit', $data);
        $this->load->view('template/footer');
    }

    

}
