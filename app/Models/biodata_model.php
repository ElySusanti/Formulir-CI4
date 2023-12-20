<?php

namespace App\Models;

use CodeIgniter\Model;

class biodata_model extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "NO_REGISTRATION";
    public function Age()
    {
        // Ambil data pengguna dengan menghitung usia
        return $this->db->query('SELECT *, YEAR(CURDATE()) - YEAR(`DATE_OF_BIRTH`) AS AGEYEAR, MONTH(CURDATE()) - MONTH(`DATE_OF_BIRTH`) AS AGEMONTH, DAY(CURDATE()) - DAY(`DATE_OF_BIRTH`) AS AGEDAY
        FROM biodata')->getResultArray();
    }
}
