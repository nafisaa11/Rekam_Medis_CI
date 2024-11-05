<?php

class RekamMedis_model extends CI_Model
{
    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function getPasien($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('Nama_Lengkap', $keyword);
            $this->db->or_like('Nama_Ibu', $keyword);
            $this->db->or_like('Tanggal_Lahir', $keyword);
            $this->db->or_like('No_Telp', $keyword);
            $this->db->or_like('ID_Pasien', $keyword);
        }
        return $this->db->get('pasien', $limit, $start)->result_array();
    }

    public function countAllPasien()
    {
        return $this->db->get('pasien')->num_rows();
    }

    public function countPasien($keyword = null)
    {
        if ($keyword) {
            $this->db->like('Nama_Lengkap', $keyword);
            $this->db->or_like('Nama_Ibu', $keyword);
            $this->db->or_like('Tanggal_Lahir', $keyword);
            $this->db->or_like('No_Telp', $keyword);
            $this->db->or_like('ID_Pasien', $keyword);
        }
        return $this->db->count_all_results('pasien');
    }

    public function getDetailPasien($id_pasien)
    {
        $this->db->where('ID_Pasien', $id_pasien);
        return $this->db->get('pasien')->row_array();
    }

    public function getRekamMedisByPasien($id_pasien)
    {
        $this->db->where('ID_Pasien', $id_pasien);
        return $this->db->get('rekam_medis')->result_array();
    }

    
    public function tambahRekamMedis()
{
    $data = [
        'ID_Pasien' => $this->input->post('ID_pasien', true), 
        'Tanggal_KRS' => $this->input->post('Tanggal_KRS', true),
        'Tanggal_MRS' => $this->input->post('Tanggal_MRS', true),
        'Keluhan' => $this->input->post('Keluhan', true),
        'Diagnosa' => $this->input->post('Diagnosa', true),
        'Penanganan_Medis' => $this->input->post('Penanganan_Medis', true),
        'Hasil_Pemeriksaan' => $this->input->post('Hasil_Pemeriksaan', true),
        'Nama_Dokter' => $this->input->post('Nama_Dokter', true),
        'Obat' => $this->input->post('Obat', true),
        'Tindakan' => $this->input->post('Tindakan', true),
        'Pelayanan' => $this->input->post('Pelayanan', true),
        'Rujukan' => $this->input->post('Rujukan', true),
        'Catatan' => $this->input->post('Catatan', true)
    ];

    $this->db->insert('rekam_medis', $data);
}
}
?>
