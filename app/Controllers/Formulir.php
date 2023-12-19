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
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/persetujuan-anastesi', $data);
    }
    public function dua()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/daftar-tilik-keselamatan-pasien', $data);
    }
    public function tiga()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/laporan-pemakaian-instrument', $data);
    }
    public function empat()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/pengkajian-awal', $data);
    }
    public function lima()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/radiologi-online', $data);
    }
    public function enam()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('Form/lab-online', $data);
    }
    public function simpan()
    {
        $assessment_model = new assessment_model();
        $data['data'] = $assessment_model->AddData();

        return redirect()->to('Formulir/input');
    }
    public function form1()
    {
        $data['data'] = $this->assessment_model->tampildataform1();

        return view('Tampil/form1', $data);
    }
    public function form2()
    {
        $data['data'] = $this->assessment_model->tampildataform2();

        return view('Tampil/form2', $data);
    }
    public function form3()
    {
        $data['data'] = $this->assessment_model->tampildataform3();

        return view('Tampil/form3', $data);
    }
    public function form4()
    {
        $data['data'] = $this->assessment_model->tampildataform4();

        return view('Tampil/form4', $data);
    }
    public function form5()
    {
        $data['data'] = $this->assessment_model->tampildataform5();

        return view('Tampil/form5', $data);
    }
    public function form6()
    {
        $data['data'] = $this->assessment_model->tampildataform6();

        return view('Tampil/form6', $data);
    }
}
