<?php

namespace App\Models;

use CodeIgniter\Model;

class Assessment_model extends Model
{
    public function tampildata()
    {
        $query = $this->db->query("SELECT * FROM BIODATA");

        return $query->getResult();
    }
}
