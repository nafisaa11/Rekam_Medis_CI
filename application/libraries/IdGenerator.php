<?php

class IDGenerator {
    private $db;

    public function __construct()
    {
        $this->db = &get_instance()->db; // use CI's database instance
    }

    public function generateIdPasien()
    {
        $prefix = "PENSH";
        $this->db->select('ID_Pasien')->from('pasien')->order_by('ID_Pasien', 'DESC')->limit(1);
        $result = $this->db->get()->row_array();

        if ($result) {
            $lastNumber = (int) substr($result['ID_Pasien'], -5);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $formattedNumber = str_pad($newNumber, 5, '0', STR_PAD_LEFT);
        return $prefix . $formattedNumber;
    }

    public function generateIdRekamMedis()
    {
        $prefix = "RPENSH";

        // Update with the actual table name
        $this->db->query("SELECT id FROM rekam_medis ORDER BY id DESC LIMIT 1");
        $result = $this->db->single();

        if ($result) {
            $lastNumber = (int) substr($result['id'], -5);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $formattedNumber = str_pad($newNumber, 5, '0', STR_PAD_LEFT);
        return $prefix . $formattedNumber;
    }
}

// Example usage:
// $idGenerator = new IDGenerator($db);
// $newIDPasien = $idGenerator->generateIdPasien();
// $newIDRekamMedis = $idGenerator->generateIdRekamMedis();