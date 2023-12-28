<?php


namespace App\Controllers;

use App\Models\biodata_model;
use App\Models\assessment_model;

class Formulir extends BaseController
{
    protected $biodata_model;
    protected $assessment_model;
    public function __construct()
    {
        $this->biodata_model = new biodata_model();
        $this->assessment_model = new assessment_model();
    }
    public function index()
    {
        return view('dashboard');
    }
    public function input()
    {
        return view('input-data');
    }
    public function satu()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/persetujuan-anastesi', $data);
    }
    public function dua()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/daftar-tilik-keselamatan-pasien', $data);
    }
    public function tiga()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/laporan-pemakaian-instrument', $data);
    }
    public function empat()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/pengkajian-awal', $data);
    }
    public function lima()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/radiologi-online', $data);
    }
    public function enam()
    {
        $biodata = $this->biodata_model->findAll();
        $data = [
            'Biodata' => $biodata
        ];
        return view('Form/lab-online', $data);
    }
    public function simpan()
    {
        $body_id = $this->assessment_model->generate_id();
        $this->assessment_model->save([
            'FORM' => $this->request->getVar('FORM'),
            'BODY_ID' => $body_id,
            'ORG_UNIT_CODE' => $this->request->getVar('ORG_UNIT_CODE'),
            'PASIEN_DIAGNOSA_ID' => $this->request->getVar('PASIEN_DIAGNOSA_ID'),
            'DIAGNOSA_ID' => $this->request->getVar('DIAGNOSA_ID'),
            'NO_REGISTRATION' => $this->request->getVar('NO_REGISTRATION'),
            'VISIT_ID' => $this->request->getVar('VISIT_ID'),
            'BILL_ID' => $this->request->getVar('BILL_ID'),
            'CLINIC_ID' => $this->request->getVar('CLINIC_ID'),
            'CLASS_ROOM_ID' => $this->request->getVar('CLASS_ROOM_ID'),
            'BED_ID' => $this->request->getVar('BED_ID'),
            'IN_DATE' => $this->request->getVar('IN_DATE'),
            'EXIT_DATE' => $this->request->getVar('EXIT_DATE'),
            'KELUAR_ID' => $this->request->getVar('KELUAR_ID'),
            'EXAMINATION_DATE' => $this->request->getVar('EXAMINATION_DATE'),
            'TEMPERATURE' => $this->request->getVar('TEMPERATURE'),
            'TENSION_UPPER' => $this->request->getVar('TENSION_UPPER'),
            'TENSION_BELOW' => $this->request->getVar('TENSION_BELOW'),
            'NADI' => $this->request->getVar('NADI'),
            'NAFAS' => $this->request->getVar('NAFAS'),
            'WEIGHT' => $this->request->getVar('WEIGHT'),
            'HEIGHT' => $this->request->getVar('HEIGHT'),
            'ARM_DIAMETER' => $this->request->getVar('ARM_DIAMETER'),
            'ANAMNASE' => $this->request->getVar('ANAMNASE'),
            'PEMERIKSAAN' => $this->request->getVar('PEMERIKSAAN'),
            'TERAPHY_DESC' => $this->request->getVar('TERAPHY_DESC'),
            'INSTRUCTION' => $this->request->getVar('INSTRUCTION'),
            'MEDICAL_TREATMENT' => $this->request->getVar('MEDICAL_TREATMENT'),
            'EMPLOYEE_ID' => $this->request->getVar('EMPLOYEE_ID'),
            'DESCRIPTION' => $this->request->getVar('DESCRIPTION'),
            'MODIFIED_DATE' => $this->request->getVar('MODIFIED_DATE'),
            'MODIFIED_BY' => $this->request->getVar('MODIFIED_BY'),
            'MODIFIED_FROM' => $this->request->getVar('MODIFIED_FROM'),
            'STATUS_PASIEN_ID' => $this->request->getVar('STATUS_PASIEN_ID'),
            'AGEYEAR' => $this->request->getVar('AGEYEAR'),
            'AGEMONTH' => $this->request->getVar('AGEMONTH'),
            'AGEDAY' => $this->request->getVar('AGEDAY'),
            'THENAME' => $this->request->getVar('THENAME'),
            'THEADDRESS' => $this->request->getVar('THEADDRESS'),
            'THEID' => $this->request->getVar('THEID'),
            'ISRJ' => $this->request->getVar('ISRJ'),
            'GENDER' => $this->request->getVar('GENDER'),
            'DOCTOR' => $this->request->getVar('DOCTOR'),
            'KAL_ID' => $this->request->getVar('KAL_ID'),
            'PETUGAS_ID' => $this->request->getVar('PETUGAS_ID'),
            'PETUGAS' => $this->request->getVar('PETUGAS'),
            'ACCOUNT_ID' => $this->request->getVar('ACCOUNT_ID'),
            'SATURASI' => $this->request->getVar('SATURASI'),
            'ALLOANAMNESIS_CONTACT' => $this->request->getVar('ALLOANAMNESIS_CONTACT'),
            'ALLOANAMNESIS_RESULT' => $this->request->getVar('ALLOANAMNESIS_RESULT'),
            'ALLOANAMNESIS_HUB' => $this->request->getVar('ALLOANAMNESIS_HUB'),
            'DIAGNOSA_DESC' => $this->request->getVar('DIAGNOSA_DESC'),
            'DIAGNOSA_HISTORY' => $this->request->getVar('DIAGNOSA_HISTORY'),
            'DIAGNOSA_KERJA' => $this->request->getVar('DIAGNOSA_KERJA'),
            'DIAGNOSA_BANDING' => $this->request->getVar('DIAGNOSA_BANDING'),
            'RIWAYAT_OBAT' => $this->request->getVar('RIWAYAT_OBAT'),
            'RIWAYAT_ALERGI' => $this->request->getVar('RIWAYAT_ALERGI'),
            'ASSESSMENT_TYPE' => $this->request->getVar('ASSESSMENT_TYPE'),
            'treat_image' => $this->request->getVar('treat_image'),
            'TTD' => $this->request->getVar('TTD'),
            'TTD_1' => $this->request->getVar('TTD_1'),
            'TTD_2' => $this->request->getVar('TTD_2'),
            'TTD_3' => $this->request->getVar('TTD_3'),
            'LOKALIS' => $this->request->getVar('LOKALIS'),
            'ALLOANAMNESIS_ADDRESS' => $this->request->getVar('ALLOANAMNESIS_ADDRESS'),
            'ALLOANAMNESIS_SEX' => $this->request->getVar('ALLOANAMNESIS_SEX'),
            'ALLOANAMNESIS_AGE' => $this->request->getVar('ALLOANAMNESIS_AGE'),
            'EDUCATION_DATE' => $this->request->getVar('EDUCATION_DATE'),
            'v_01' => $this->request->getVar('v_01'),
            'v_02' => $this->request->getVar('v_02'),
            'v_03' => $this->request->getVar('v_03'),
            'v_04' => $this->request->getVar('v_04'),
            'v_05' => $this->request->getVar('v_05'),
            'v_06' => $this->request->getVar('v_06'),
            'v_07' => $this->request->getVar('v_07'),
            'v_08' => $this->request->getVar('v_08'),
            'v_09' => $this->request->getVar('v_09'),
            'v_10' => $this->request->getVar('v_10'),
            'v_11' => $this->request->getVar('v_11'),
            'v_12' => $this->request->getVar('v_12'),
            'v_13' => $this->request->getVar('v_13'),
            'v_14' => $this->request->getVar('v_14'),
            'v_15' => $this->request->getVar('v_15'),
            'v_16' => $this->request->getVar('v_16'),
            'v_17' => $this->request->getVar('v_17'),
            'v_18' => $this->request->getVar('v_18'),
            'v_19' => $this->request->getVar('v_19'),
            'v_20' => $this->request->getVar('v_20'),
            'v_21' => $this->request->getVar('v_21'),
            'v_22' => $this->request->getVar('v_22'),
            'v_23' => $this->request->getVar('v_23'),
            'v_24' => $this->request->getVar('v_24'),
            'v_25' => $this->request->getVar('v_25'),
            'v_26' => $this->request->getVar('v_26'),
            'v_27' => $this->request->getVar('v_27'),
            'v_28' => $this->request->getVar('v_28'),
            'v_29' => $this->request->getVar('v_29'),
            'v_30' => $this->request->getVar('v_30'),
            'v_31' => $this->request->getVar('v_31'),
            'v_32' => $this->request->getVar('v_32'),
            'v_33' => $this->request->getVar('v_33'),
            'v_34' => $this->request->getVar('v_34'),
            'v_35' => $this->request->getVar('v_35'),
            'v_36' => $this->request->getVar('v_36'),
            'v_37' => $this->request->getVar('v_37'),
            'v_38' => $this->request->getVar('v_38'),
            'v_39' => $this->request->getVar('v_39'),
            'v_40' => $this->request->getVar('v_40'),
            'v_41' => $this->request->getVar('v_41'),
            'v_42' => $this->request->getVar('v_42'),
            'v_43' => $this->request->getVar('v_43'),
            'v_44' => $this->request->getVar('v_44'),
            'v_45' => $this->request->getVar('v_45'),
            'v_46' => $this->request->getVar('v_46'),
            'v_47' => $this->request->getVar('v_47'),
            'v_48' => $this->request->getVar('v_48'),
            'v_49' => $this->request->getVar('v_49'),
            'v_50' => $this->request->getVar('v_50'),
            'v_51' => $this->request->getVar('v_51'),
            'v_52' => $this->request->getVar('v_52'),
            'v_53' => $this->request->getVar('v_53'),
            'v_54' => $this->request->getVar('v_54'),
            'v_55' => $this->request->getVar('v_55'),
            'v_56' => $this->request->getVar('v_56'),
            'v_57' => $this->request->getVar('v_57'),
            'v_58' => $this->request->getVar('v_58'),
            'v_59' => $this->request->getVar('v_59'),
            'v_60' => $this->request->getVar('v_60'),
            'v_61' => $this->request->getVar('v_61'),
            'v_62' => $this->request->getVar('v_62'),
            'v_63' => $this->request->getVar('v_63'),
            'v_64' => $this->request->getVar('v_64'),
            'v_65' => $this->request->getVar('v_65'),
            'v_66' => $this->request->getVar('v_66'),
            'v_67' => $this->request->getVar('v_67'),
            'v_68' => $this->request->getVar('v_68'),
            'v_69' => $this->request->getVar('v_69'),
            'v_70' => $this->request->getVar('v_70'),
            'v_71' => $this->request->getVar('v_71'),
            'v_72' => $this->request->getVar('v_72'),
            'v_73' => $this->request->getVar('v_73'),
            'v_74' => $this->request->getVar('v_74'),
            'v_75' => $this->request->getVar('v_75'),
            'v_76' => $this->request->getVar('v_76'),
            'v_77' => $this->request->getVar('v_77'),
            'v_78' => $this->request->getVar('v_78'),
            'v_79' => $this->request->getVar('v_79'),
            'v_80' => $this->request->getVar('v_80'),
            'v_81' => $this->request->getVar('v_81'),
            'v_82' => $this->request->getVar('v_82'),
            'v_83' => $this->request->getVar('v_83'),
            'v_84' => $this->request->getVar('v_84'),
            'v_85' => $this->request->getVar('v_85'),
            'v_86' => $this->request->getVar('v_86'),
            'v_87' => $this->request->getVar('v_87'),
            'v_88' => $this->request->getVar('v_88'),
            'v_89' => $this->request->getVar('v_89'),
            'v_90' => $this->request->getVar('v_90'),
            'v_91' => $this->request->getVar('v_91'),
            'v_92' => $this->request->getVar('v_92'),
            'v_93' => $this->request->getVar('v_93'),
            'v_94' => $this->request->getVar('v_94'),
            'v_95' => $this->request->getVar('v_95'),
            'v_96' => $this->request->getVar('v_96'),
            'v_97' => $this->request->getVar('v_97'),
            'v_98' => $this->request->getVar('v_98'),
            'v_99' => $this->request->getVar('v_99'),
            'v_100' => $this->request->getVar('v_100'),
            't_01' => $this->request->getVar('t_01'),
            't_02' => $this->request->getVar('t_02'),
            't_03' => $this->request->getVar('t_03'),
            't_04' => $this->request->getVar('t_04'),
            't_05' => $this->request->getVar('t_05'),
            't_06' => $this->request->getVar('t_06'),
            't_07' => $this->request->getVar('t_07'),
            't_08' => $this->request->getVar('t_08'),
            't_09' => $this->request->getVar('t_09'),
            't_010' => $this->request->getVar('t_010'),
            't_011' => $this->request->getVar('t_011'),
            't_012' => $this->request->getVar('t_012'),
            't_013' => $this->request->getVar('t_013'),
            't_014' => $this->request->getVar('t_014'),
            't_015' => $this->request->getVar('t_015'),
            't_016' => $this->request->getVar('t_016'),
            't_017' => $this->request->getVar('t_017'),
            't_018' => $this->request->getVar('t_018'),
            't_019' => $this->request->getVar('t_019'),
            't_020' => $this->request->getVar('t_020'),
            't_021' => $this->request->getVar('t_021'),
            't_022' => $this->request->getVar('t_022'),
            't_023' => $this->request->getVar('t_023'),
            't_024' => $this->request->getVar('t_024'),
            't_025' => $this->request->getVar('t_025'),
            't_026' => $this->request->getVar('t_026'),
            't_027' => $this->request->getVar('t_027'),
            't_028' => $this->request->getVar('t_028'),
            't_029' => $this->request->getVar('t_029'),
            't_030' => $this->request->getVar('t_030'),
            't_031' => $this->request->getVar('t_031'),
            't_032' => $this->request->getVar('t_032'),
            't_033' => $this->request->getVar('t_033'),
            't_034' => $this->request->getVar('t_034'),
            't_035' => $this->request->getVar('t_035'),
            't_036' => $this->request->getVar('t_036'),
            't_037' => $this->request->getVar('t_037'),
            't_038' => $this->request->getVar('t_038'),
            't_039' => $this->request->getVar('t_039'),
            't_040' => $this->request->getVar('t_040'),
            't_041' => $this->request->getVar('t_041'),
            't_042' => $this->request->getVar('t_042'),
            't_043' => $this->request->getVar('t_043'),
            't_044' => $this->request->getVar('t_044'),
            't_045' => $this->request->getVar('t_045'),
            't_046' => $this->request->getVar('t_046'),
            't_047' => $this->request->getVar('t_047'),
            't_048' => $this->request->getVar('t_048'),
            't_049' => $this->request->getVar('t_049'),
            't_050' => $this->request->getVar('t_050'),
            't_051' => $this->request->getVar('t_051'),
            't_052' => $this->request->getVar('t_052'),
            't_053' => $this->request->getVar('t_053'),
            't_054' => $this->request->getVar('t_054'),
            't_055' => $this->request->getVar('t_055'),
            't_056' => $this->request->getVar('t_056'),
            't_057' => $this->request->getVar('t_057'),
            't_058' => $this->request->getVar('t_058'),
            't_059' => $this->request->getVar('t_059'),
            't_060' => $this->request->getVar('t_060'),
            't_061' => $this->request->getVar('t_061'),
            't_062' => $this->request->getVar('t_062'),
            't_063' => $this->request->getVar('t_063'),
            't_064' => $this->request->getVar('t_064'),
            't_065' => $this->request->getVar('t_065'),
            't_066' => $this->request->getVar('t_066'),
            't_067' => $this->request->getVar('t_067'),
            't_068' => $this->request->getVar('t_068'),
            't_069' => $this->request->getVar('t_069'),
            't_070' => $this->request->getVar('t_070'),
            't_071' => $this->request->getVar('t_071'),
            't_072' => $this->request->getVar('t_072'),
            't_073' => $this->request->getVar('t_073'),
            't_074' => $this->request->getVar('t_074'),
            't_075' => $this->request->getVar('t_075'),
            't_076' => $this->request->getVar('t_076'),
            't_077' => $this->request->getVar('t_077'),
            't_078' => $this->request->getVar('t_078'),
            't_079' => $this->request->getVar('t_079'),
            't_080' => $this->request->getVar('t_080'),
            't_081' => $this->request->getVar('t_081'),
            't_082' => $this->request->getVar('t_082'),
            't_083' => $this->request->getVar('t_083'),
            't_084' => $this->request->getVar('t_084'),
            't_085' => $this->request->getVar('t_085'),
            't_086' => $this->request->getVar('t_086'),
            't_087' => $this->request->getVar('t_087'),
            't_088' => $this->request->getVar('t_088'),
            't_089' => $this->request->getVar('t_089'),
            't_090' => $this->request->getVar('t_090'),
            't_091' => $this->request->getVar('t_091'),
            't_092' => $this->request->getVar('t_092'),
            't_093' => $this->request->getVar('t_093'),
            't_094' => $this->request->getVar('t_094'),
            't_095' => $this->request->getVar('t_095'),
            't_096' => $this->request->getVar('t_096'),
            't_097' => $this->request->getVar('t_097'),
            't_098' => $this->request->getVar('t_098'),
            't_099' => $this->request->getVar('t_099'),
            't_100' => $this->request->getVar('t_100')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');

        return redirect()->to('Formulir/input');
    }
    public function form1()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F1'),
        ];
        return view('Tampil/form1', $data);
    }
    public function form2()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F2')
        ];
        return view('Tampil/form2', $data);
    }
    public function form3()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F3')
        ];
        return view('Tampil/form3', $data);
    }
    public function form4()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F4')
        ];
        return view('Tampil/form4', $data);
    }
    public function form5()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F5')
        ];
        return view('Tampil/form5', $data);
    }
    public function form6()
    {
        $data = [
            'data' => $this->assessment_model->getDataByValue('F6')
        ];
        return view('Tampil/form6', $data);
    }
    public function detail1($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id),
            'detail1' => $this->assessment_model->getJoinedData()
        ];
        return view('Detail/form1', $data);
    }
    public function detail2($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Detail/form2', $data);
    }
    public function detail3($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Detail/form3', $data);
    }
    public function detail4($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Detail/form4', $data);
    }
    public function detail5($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Detail/form5', $data);
    }
    public function detail6($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Detail/form6', $data);
    }
    public function update1($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form1', $data);
    }
    public function update2($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form2', $data);
    }
    public function update3($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form3', $data);
    }
    public function update4($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form4', $data);
    }
    public function update5($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form5', $data);
    }
    public function update6($id)
    {
        $data = [
            'detail' => $this->assessment_model->getDataById($id)
        ];
        return view('Update/form6', $data);
    }
    public function delete1($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form1');
    }
    public function delete2($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form2');
    }
    public function delete3($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form3');
    }
    public function delete4($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form4');
    }
    public function delete5($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form5');
    }
    public function delete6($id)
    {
        $this->assessment_model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Formulir/form6');
    }
}
