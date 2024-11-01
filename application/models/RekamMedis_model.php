<?php

class RekamMedis_model extends CI_Model
{
    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }
    public function getPasien($limit, $start, $keyword = null)
    {
        if($keyword) {
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

}
?>