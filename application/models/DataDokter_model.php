<?php

class RekamMedis_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('IdGenerator');
    }

    public function getAllDokter()
    {
        return $this->db->get('Dokter')->result_array();
    }

    public function countDokter($keyword)
    {
        $this->db->like('Nama', $keyword);
        $this->db->or_like('Spesialisasi', $keyword);
        $this->db->or_like('Alamat', $keyword);
        $this->db->or_like('No_Telp', $keyword);
        $this->db->or_like('ID_Dokter', $keyword);
        return $this->db->get('Dokter')->num_rows();
    }

    public function getDokter($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('Nama', $keyword);
            $this->db->or_like('Spesialisasi', $keyword);
            $this->db->or_like('Alamat', $keyword);
            $this->db->or_like('No_Telp', $keyword);
            $this->db->or_like('ID_Dokter', $keyword);
        }
        return $this->db->get('Dokter', $limit, $start)->result_array();
    }


    public function countAllDokter()
    {
        return $this->db->get('Dokter')->num_rows();
    }

    public function tambahDataDokter()
    {
        $newID = $this->idgenerator->generateIdDokter(); // Generate a new ID

        // Prepare data for the patient
        $data = [
            "ID_Dokter" => $newID, // Use the generated ID
            "ID_Eksternal" => $this->input->post('id-eksternal', true) ?: '',
            "Nama" => $this->input->post('nama-lengkap', true) ?: '',
            "Nama_Panggilan" => $this->input->post('nama-panggilan', true) ?: '',
            "Nama_Ibu" => $this->input->post('nama-ibu', true) ?: '',
            "Jenis_Kelamin" => $this->input->post('jenis-kelamin', true) ?: '',
            "Tempat_Lahir" => $this->input->post('tempat-lahir', true) ?: '',
            "Tanggal_Lahir" => $this->input->post('tgl-lahir', true) ?: null,
            "Agama" => $this->input->post('agama', true) ?: '',
            "Ras" => $this->input->post('ras', true) ?: '',
            "Alamat" => $this->input->post('alamat', true) ?: '',
            "Kode_Negara" => $this->input->post('kode-negara', true) ?: '',
            "No_Telp" => $this->input->post('no-telp', true) ?: '',
            "Bahasa_Utama" => $this->input->post('bahasa-utama', true) ?: '',
            "Status_Pernikahan" => $this->input->post('status', true) ?: '',
            "No_Rekening" => $this->input->post('no-rek', true) ?: '',
            "No_SIM" => $this->input->post('no-sim', true) ?: '',
            "Kelompok_Etnis" => $this->input->post('kel-etnis', true) ?: '',
            "Kelahiran_Kembar" => $this->input->post('kelahiran-kembar', true) ?: '',
            "Jumlah_Kembar" => $this->input->post('jml-kembar', true) ?: 0,
            "Kewarganegaraan" => $this->input->post('kewarganegaraan', true) ?: '',
            "Indikator_Meninggal" => $this->input->post('indikator-meninggal', true) ?: '',
            "Tanggal_Meninggal" => $this->input->post('tgl-meninggal', true) ?: null
        ];

        // Insert the data into the database
        $this->db->insert('Dokter', $data);

        return $this->db->affected_rows();
    }

    public function getDetailDokter($id_Dokter)
    {
        $this->db->where('ID_Dokter', $id_Dokter);
        return $this->db->get('Dokter')->row_array();
    }

    public function getRekamMedisByDokter($id_Dokter)
    {
        $this->db->where('ID_Dokter', $id_Dokter);
        return $this->db->get('rekam_medis')->result_array();
    }

    public function tambahDataRekamMedis($id_Dokter)
    {
        $newID = $this->idgenerator->generateIdRekamMedis();

        $data = [
            'NO_RekamMedis' => $newID,
            'ID_Dokter' => $id_Dokter,
            'Tanggal_KRS' => $this->input->post('Tanggal_KRS', true) ?: '',
            'Tanggal_MRS' => $this->input->post('Tanggal_MRS', true) ?: '',
            'Nama_RumahSakit' => $this->input->post('Nama_RumahSakit', true) ?: '',
            'Keluhan' => $this->input->post('Keluhan', true) ?: '',
            'Diagnosa' => $this->input->post('Diagnosa', true) ?: '',
            'Penanganan_Medis' => $this->input->post('Penanganan_Medis', true) ?: '',
            'Hasil_Pemeriksaan' => $this->input->post('Hasil_Pemeriksaan', true) ?: '',
            'Nama_Dokter' => $this->input->post('Nama_Dokter', true) ?: '',
            'Obat' => $this->input->post('Obat', true) ?: '',
            'Tindakan' => $this->input->post('Tindakan', true) ?: '',
            'Pelayanan' => $this->input->post('Pelayanan', true) ?: '',
            'Rujukan' => $this->input->post('Rujukan', true) ?: '',
            'Catatan' => $this->input->post('Catatan', true) ?: ''
        ];

        // Insert the data into the database
        $this->db->insert('rekam_medis', $data);
        return $this->db->affected_rows();
    }


    public function getRekamMedisById($NO_RekamMedis)
    {
        $this->db->where('NO_RekamMedis', $NO_RekamMedis);
        return $this->db->get('rekam_medis')->row_array();

    }

    public function editDataRekamMedis($NO_RekamMedis)
{
    $data = [
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

    $this->db->where('NO_RekamMedis', $NO_RekamMedis );
    $this->db->update('rekam_medis', $data);
}

}

?>