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
        return view('halaman_utama');
    }
    public function satu()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/persetujuan-anastesi', $data);
    }
    public function dua()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/daftar-tilik-keselamatan-pasien', $data);
    }
    public function tiga()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/laporan-pemakaian-instrument', $data);
    }
    public function empat()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/pengkajian-awal', $data);
    }
    public function lima()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/radiologi-online', $data);
    }
    public function enam()
    {
        $biodata_model = new biodata_model();

        $data['Biodata'] = $biodata_model->findAll();
        return view('form/lab-online', $data);
    }
    public function simpan()
    {
        $assessment_model = new assessment_model();
        $data['data'] = $this->assessment_model->AddData();

        return redirect()->to('formulir/index');
        // $biodata_model = new biodata_model();
        // $test_model = new test_model();
    }
}
