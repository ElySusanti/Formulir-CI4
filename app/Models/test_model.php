<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class test_model extends Model
{
    protected $db;
    protected $request;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }
    public function tampildata()
    {
        $query = $this->db->query("SELECT * FROM BIODATA");

        return $query->getResult();
    }
    public function simpandata()
    {
        $v_01 = $this->request->getPost('v_01');
        $v_02 = $this->request->getPost('v_02');
        $v_03 = $this->request->getPost('v_03');
        $v_04 = $this->request->getPost('v_04');
        $v_05 = $this->request->getPost('v_05');
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
        $v_24 = $this->request->getPost('v_24');
        $v_25 = $this->request->getPost('v_25');
        $v_26 = $this->request->getPost('v_26');
        $v_27 = $this->request->getPost('v_27');
        $v_28 = $this->request->getPost('v_28');
        $v_29 = $this->request->getPost('v_29');
        $v_30 = $this->request->getPost('v_30');
        $v_31 = $this->request->getPost('v_31');
        $v_32 = $this->request->getPost('v_32');
        $v_33 = $this->request->getPost('v_33');
        $v_34 = $this->request->getPost('v_34');
        $v_35 = $this->request->getPost('v_35');
        $v_36 = $this->request->getPost('v_36');
        $v_37 = $this->request->getPost('v_37');
        $v_38 = $this->request->getPost('v_38');
        $v_39 = $this->request->getPost('v_39');
        $v_40 = $this->request->getPost('v_40');
        $v_41 = $this->request->getPost('v_41');
        $v_42 = $this->request->getPost('v_42');
        $v_43 = $this->request->getPost('v_43');
        $v_44 = $this->request->getPost('v_44');
        $v_45 = $this->request->getPost('v_45');
        $v_46 = $this->request->getPost('v_46');
        $v_47 = $this->request->getPost('v_47');
        $v_48 = $this->request->getPost('v_48');
        $v_49 = $this->request->getPost('v_49');
        $v_50 = $this->request->getPost('v_50');
        $t_01 = $this->request->getPost('t_01');
        $t_02 = $this->request->getPost('t_02');
        $t_03 = $this->request->getPost('t_03');
        $t_04 = $this->request->getPost('t_04');
        $t_05 = $this->request->getPost('t_05');
        $t_06 = $this->request->getPost('t_06');
        $t_07 = $this->request->getPost('t_07');
        $t_08 = $this->request->getPost('t_08');
        $t_09 = $this->request->getPost('t_09');
        $t_010 = $this->request->getPost('t_010');
        $t_011 = $this->request->getPost('t_011');
        $t_012 = $this->request->getPost('t_012');
        $t_013 = $this->request->getPost('t_013');
        $t_014 = $this->request->getPost('t_014');
        $t_015 = $this->request->getPost('t_015');
        $t_016 = $this->request->getPost('t_016');
        $t_017 = $this->request->getPost('t_017');
        $t_018 = $this->request->getPost('t_018');
        $t_019 = $this->request->getPost('t_019');
        $t_020 = $this->request->getPost('t_020');
        $t_021 = $this->request->getPost('t_021');
        $t_022 = $this->request->getPost('t_022');
        $t_023 = $this->request->getPost('t_023');
        $t_024 = $this->request->getPost('t_024');
        $t_025 = $this->request->getPost('t_025');
        $t_026 = $this->request->getPost('t_026');
        $t_027 = $this->request->getPost('t_027');
        $t_028 = $this->request->getPost('t_028');
        $t_029 = $this->request->getPost('t_029');
        $t_030 = $this->request->getPost('t_030');
        $t_031 = $this->request->getPost('t_031');
        $t_032 = $this->request->getPost('t_032');
        $t_033 = $this->request->getPost('t_033');
        $t_034 = $this->request->getPost('t_034');
        $t_035 = $this->request->getPost('t_035');
        $t_036 = $this->request->getPost('t_036');
        $t_037 = $this->request->getPost('t_037');
        $t_038 = $this->request->getPost('t_038');
        $t_039 = $this->request->getPost('t_039');
        $t_040 = $this->request->getPost('t_040');
        $t_041 = $this->request->getPost('t_041');
        $t_042 = $this->request->getPost('t_042');
        $t_043 = $this->request->getPost('t_043');
        $t_044 = $this->request->getPost('t_044');
        $t_045 = $this->request->getPost('t_045');
        $t_046 = $this->request->getPost('t_046');
        $t_047 = $this->request->getPost('t_047');
        $t_048 = $this->request->getPost('t_048');
        $t_049 = $this->request->getPost('t_049');
        $t_050 = $this->request->getPost('t_050');


        $sql = "INSERT into TEST (v_01, v_02, v_03, v_04, v_05, v_06, v_07, v_08, v_09, v_10, 
                                v_11, v_12, v_13, v_14, v_15, v_16, v_17, v_18, v_19, v_20, 
                                v_21, v_22, v_23, v_24, v_25, v_26, v_27, v_28, v_29, v_30, 
                                v_31, v_32, v_33, v_34, v_35, v_36, v_37, v_38, v_39, v_40, 
                                v_41, v_42, v_43, v_44, v_45, v_46, v_47, v_48, v_49, v_50,
                                t_01, t_02, t_03, t_04, t_05, t_06, t_07, t_08, t_09, t_010, 
                                t_011, t_012, t_013, t_014, t_015, t_016, t_017, t_018, t_019, t_020, 
                                t_021, t_022, t_023, t_024, t_025, t_026, t_027, t_028, t_029, t_030, 
                                t_031, t_032, t_033, t_034, t_035, t_036, t_037, t_038, t_039, t_040, 
                                t_041, t_042, t_043, t_044, t_045, t_046, t_047, t_048, t_049, t_050)
                    VALUES ('$v_01', '$v_02', '$v_03', '$v_04', '$v_05', '$v_06', '$v_07', '$v_08', '$v_09', '$v_10',
                            '$v_11', '$v_12', '$v_13', '$v_14', '$v_15', '$v_16', '$v_17', '$v_18', '$v_19', '$v_20',
                            '$v_21', '$v_22', '$v_23', '$v_24', '$v_25', '$v_26', '$v_27', '$v_28', '$v_29', '$v_30',
                            '$v_31', '$v_32', '$v_33', '$v_34', '$v_35', '$v_36', '$v_37', '$v_38', '$v_39', '$v_40',
                            '$v_41', '$v_42', '$v_43', '$v_44', '$v_45', '$v_46', '$v_47', '$v_48', '$v_49', '$v_50',
                            '$t_01', '$t_02', '$t_03', '$t_04', '$t_05', '$t_06', '$t_07', '$t_08', '$t_09', '$t_010',
                            '$t_011', '$t_012', '$t_013', '$t_014', '$t_015', '$t_016', '$t_017', '$t_018', '$t_019', '$t_020',
                            '$t_021', '$t_022', '$t_023', '$t_024', '$t_025', '$t_026', '$t_027', '$t_028', '$t_029', '$t_030',
                            '$t_031', '$t_032', '$t_033', '$t_034', '$t_035', '$t_036', '$t_037', '$t_038', '$t_039', '$t_040',
                            '$t_041', '$t_042', '$t_043', '$t_044', '$t_045', '$t_046', '$t_047', '$t_048', '$t_049', '$t_050')";

        $this->db->query($sql);

        return;
    }
}
