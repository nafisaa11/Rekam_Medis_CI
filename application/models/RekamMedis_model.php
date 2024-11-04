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
        // Mengambil data pasien berdasarkan ID
        $this->db->where('ID_Pasien', $id_pasien);
        return $this->db->get('pasien')->row_array();
    }

    public function getRekamMedisByPasien($id_pasien)
    {
        // Mengambil data rekam medis berdasarkan ID pasien
        $this->db->where('ID_Pasien', $id_pasien);
        return $this->db->get('rekam_medis')->result_array();
    }

}
?>