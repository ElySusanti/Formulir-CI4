<?php

namespace App\Models;

use CodeIgniter\Model;

class assessment_model extends Model
{
    protected $table = 'assessment_info';
    protected $primaryKey = 'id';
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $updatedField  = 'MODIFIED_DATE';
    protected $allowedFields = [
        'FORM', 'BODY_ID', 'ORG_UNIT_CODE', 'PASIEN_DIAGNOSA_ID', 'DIAGNOSA_ID', 'NO_REGISTRATION',
        'VISIT_ID', 'BILL_ID', 'CLINIC_ID', 'CLASS_ROOM_ID', 'BED_ID', 'IN_DATE', 'EXIT_DATE',
        'KELUAR_ID', 'EXAMINATION_DATE', 'TEMPERATURE', 'TENSION_UPPER', 'TENSION_BELOW', 'NADI',
        'NAFAS', 'WEIGHT', 'HEIGHT', 'ARM_DIAMETER', 'ANAMNASE', 'PEMERIKSAAN', 'TERAPHY_DESC',
        'INSTRUCTION', 'MEDICAL_TREATMENT', 'EMPLOYEE_ID', 'DESCRIPTION', 'MODIFIED_DATE',
        'MODIFIED_BY', 'MODIFIED_FROM', 'STATUS_PASIEN_ID', 'AGEYEAR', 'AGEMONTH', 'AGEDAY',
        'THENAME', 'THEADDRESS', 'THEID', 'ISRJ', 'GENDER', 'DOCTOR', 'KAL_ID', 'PETUGAS_ID',
        'PETUGAS', 'ACCOUNT_ID', 'SATURASI', 'ALLOANAMNESIS_CONTACT', 'ALLOANAMNESIS_RESULT',
        'ALLOANAMNESIS_HUB', 'DIAGNOSA_DESC', 'DIAGNOSA_HISTORY', 'DIAGNOSA_KERJA', 'DIAGNOSA_BANDING',
        'RIWAYAT_OBAT', 'RIWAYAT_ALERGI', 'ASSESSMENT_TYPE', 'treat_image', 'TTD', 'TTD_1', 'TTD_2', 'TTD_3',
        'LOKALIS', 'ALLOANAMNESIS_ADDRESS', 'ALLOANAMNESIS_SEX', 'ALLOANAMNESIS_AGE', 'EDUCATION_DATE',
        'V_01', 'V_02', 'V_03', 'V_04', 'V_05', 'V_06', 'V_07', 'V_08', 'V_09', 'V_10',
        'V_11', 'V_12', 'V_13', 'V_14', 'V_15', 'V_16', 'V_17', 'V_18', 'V_19', 'V_20',
        'V_21', 'V_22', 'V_23', 'V_24', 'V_25', 'V_26', 'V_27', 'V_28', 'V_29', 'V_30',
        'V_31', 'V_32', 'V_33', 'V_34', 'V_35', 'V_36', 'V_37', 'V_38', 'V_39', 'V_40',
        'V_41', 'V_42', 'V_43', 'V_44', 'V_45', 'V_46', 'V_47', 'V_48', 'V_49', 'V_50',
        'V_51', 'V_52', 'V_53', 'V_54', 'V_55', 'V_56', 'V_57', 'V_58', 'V_59', 'V_60',
        'V_61', 'V_62', 'V_63', 'V_64', 'V_65', 'V_66', 'V_67', 'V_68', 'V_69', 'V_70',
        'V_71', 'V_72', 'V_73', 'V_74', 'V_75', 'V_76', 'V_77', 'V_78', 'V_79', 'V_80',
        'V_81', 'V_82', 'V_83', 'V_84', 'V_85', 'V_86', 'V_87', 'V_88', 'V_89', 'V_90',
        'V_91', 'V_92', 'V_93', 'V_94', 'V_95', 'V_96', 'V_97', 'V_98', 'V_99', 'V_100',
        'T_01', 'T_02', 'T_03', 'T_04', 'T_05', 'T_06', 'T_07', 'T_08', 'T_09', 'T_010',
        'T_011', 'T_012', 'T_013', 'T_014', 'T_015', 'T_016', 'T_017', 'T_018', 'T_019', 'T_020',
        'T_021', 'T_022', 'T_023', 'T_024', 'T_025', 'T_026', 'T_027', 'T_028', 'T_029', 'T_030',
        'T_031', 'T_032', 'T_033', 'T_034', 'T_035', 'T_036', 'T_037', 'T_038', 'T_039', 'T_040',
        'T_041', 'T_042', 'T_043', 'T_044', 'T_045', 'T_046', 'T_047', 'T_048', 'T_049', 'T_050',
        't_051', 't_052', 't_053', 't_054', 't_055', 't_056', 't_057', 't_058', 't_059', 't_060',
        't_061', 't_062', 't_063', 't_064', 't_065', 't_066', 't_067', 't_068', 't_069', 't_070',
        't_071', 't_072', 't_073', 't_074', 't_075', 't_076', 't_077', 't_078', 't_079', 't_080',
        't_081', 't_082', 't_083', 't_084', 't_085', 't_086', 't_087', 't_088', 't_089', 't_090',
        't_091', 't_092', 't_093', 't_094', 't_095', 't_096', 't_097', 't_098', 't_099', 't_100'
    ];
    public function getDataByValue($value)
    {
        return $this->where('form', $value)->findAll();
    }
    public function generate_id()
    {
        $prefix = 'BODY';
        $date = date('YmdHis');
        $random_number = rand(1000, 9999);
        $body_id = $prefix . $date . $random_number;
        return $body_id;
    }
    public function search($keyword)
    {
        return $this->table('assessment_info')->like('THENAME', $keyword);
    }
    // public function getDataById($id)
    // {
    //     return $this->find($id);
    // }
    // public function getJoinedData($value = 'F1')
    // {
    //     $builder = $this->db->table('assessment_info');
    //     $builder->join('biodata', 'biodata.NO_REGISTRATION = assessment_info.NO_REGISTRATION', 'inner');
    //     $query = $builder->get();

    //     return $query->getResult($value);
    // }
}
