<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;


class CONTOHModel extends Model
{
    protected $db;
    protected $request;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }
    public function simpan()
    {
        $v_06 = $this->request->getPost('v_06');
        $v_07 = $this->request->getPost('v_07');
        $v_08 = $this->request->getPost('v_08');
        $v_09 = $this->request->getPost('v_09');
        $v_10 = $this->request->getPost('v_10');
        $v_11 = $this->request->getPost('v_11');
        $v_12 = $this->request->getPost('v_12');
        $v_13 = $this->request->getPost('v_13');
        $v_14 = $this->request->getPost('v_14');
        $v_15 = $this->request->getPost('v_15');
        $v_16 = $this->request->getPost('v_16');
        $v_17 = $this->request->getPost('v_17');
        $v_18 = $this->request->getPost('v_18');
        $v_19 = $this->request->getPost('v_19');
        $v_20 = $this->request->getPost('v_20');
        $v_21 = $this->request->getPost('v_21');
        $v_22 = $this->request->getPost('v_22');
        $v_23 = $this->request->getPost('v_23');
        $t_02 = $this->request->getPost('t_02');
        $t_03 = $this->request->getPost('t_03');
        $t_04 = $this->request->getPost('t_04');
        $t_05 = $this->request->getPost('t_05');

        $sql = "INSERT into assessment_info (v_06, v_07, v_08, v_09, v_10, v_11, v_12, v_13, v_14, v_15, v_16, v_17, v_18, v_19, v_20, v_21, v_22, v_23, t_02, t_03, t_04, t_05)
                    VALUES ('$v_06', '$v_07', '$v_08', '$v_09', '$v_10', '$v_11', '$v_12', '$v_13', '$v_14', '$v_15', '$v_16', '$v_17', '$v_18', '$v_19', '$v_20', '$v_21', '$v_22', '$v_23', '$t_02', '$t_03', '$t_04', '$t_05')";

        $this->db->query($sql);

        return;
    }
}
