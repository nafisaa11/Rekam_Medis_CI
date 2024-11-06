<?php

class RekamMedis_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('IdGenerator');
    }

    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function countPasien($keyword)
    {
        $this->db->like('Nama_Lengkap', $keyword);
        $this->db->or_like('Nama_Ibu', $keyword);
        $this->db->or_like('Tanggal_Lahir', $keyword);
        $this->db->or_like('No_Telp', $keyword);
        $this->db->or_like('ID_Pasien', $keyword);
        return $this->db->get('pasien')->num_rows();
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

    public function tambahDataPasien()
    {
        $newID = $this->idgenerator->generateIdPasien(); // Generate a new ID

        // Prepare data for the patient
        $data = [
            "ID_Pasien" => $newID, // Use the generated ID
            "ID_Eksternal" => $this->input->post('id-eksternal', true) ?: '',
            "Nama_Lengkap" => $this->input->post('nama-lengkap', true) ?: '',
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
        $this->db->insert('pasien', $data);

        return $this->db->affected_rows();
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

    public function tambahDataRekamMedis($id_pasien)
    {
        $newID = $this->idgenerator->generateIdRekamMedis();

        $data = [
            'NO_RekamMedis' => $newID,
            'ID_Pasien' => $id_pasien,
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

// DATA DATA DOKTER
    public function getAllDokter()
    {
        return $this->db->get('dokter')->result_array();
    }

    public function countDokter($keyword)
    {
        $this->db->like('Nama', $keyword);
        $this->db->or_like('Spesialisasi', $keyword);
        $this->db->or_like('Alamat', $keyword);
        $this->db->or_like('No_Telp', $keyword);
        $this->db->or_like('ID_Dokter', $keyword);
        return $this->db->get('dokter')->num_rows();
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
        return $this->db->get('dokter', $limit, $start)->result_array();
    }


    public function countAllDokter()
    {
        return $this->db->get('dokter')->num_rows();
    }

    public function tambahDataDokter()
    {
        $newID = $this->idgenerator->generateIdDokter(); // Generate a new ID

        // Prepare data for the patient
        $data = [
            "Nama" => $this->input->post('nama-lengkap', true) ?: '',
            "Email" => $this->input->post('email', true) ?: '',
            "Jenis_Kelamin" => $this->input->post('jenis-kelamin', true) ?: '',
            "Tanggal_Lahir" => $this->input->post('tgl-lahir', true) ?: null,
            "Alamat" => $this->input->post('alamat', true) ?: '',
            "NPI" => $this->input->post('npi', true) ?: '',
            "No_Hp" => $this->input->post('no-hp', true) ?: '',
            "Spesialisasi" => $this->input->post('spesialisasi', true) ?: '',
            "Tanggal_Lisensi" => $this->input->post('tanggal-lisensi', true) ?: null,
        ];

        // Insert the data into the database
        $this->db->insert('dokter', $data);

        return $this->db->affected_rows();
    }

    public function getDetailDokter($id_dokter)
    {
        $this->db->where('ID_Dokter', $id_dokter);
        return $this->db->get('Dokter')->row_array();
    }

}

?>