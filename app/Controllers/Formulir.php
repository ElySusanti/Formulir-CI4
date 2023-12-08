<?php


namespace App\Controllers;

use App\Models\test_model;

class Formulir extends BaseController
{
    protected $test_model;
    public function __construct()
    {
        $this->test_model = new test_model();
    }
    public function index()
    {
        return view('halaman_utama');
    }
    public function satu()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformsatu' => $tampildata,
        );

        return view('form/persetujuan-anastesi', $info);
    }
    public function dua()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformdua' => $tampildata,
        );

        return view('form/daftar-tilik-keselamatan-pasien', $info);
    }
    public function tiga()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformtiga' => $tampildata,
        );

        return view('form/laporan-pemakaian-instrument', $info);
    }
    public function empat()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformempat' => $tampildata,
        );

        return view('form/pengkajian-awal', $info);
    }
    public function lima()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformlima' => $tampildata,
        );

        return view('form/radiologi-online', $info);
    }
    public function enam()
    {
        $tampildata =  $this->test_model->tampildata();

        $info = array(
            'dataAssessmentformenam' => $tampildata,
        );

        return view('form/lab-online', $info);
    }
    public function simpan()
    {
        $simpan['test'] =  $this->test_model->simpandata();

        return redirect()->to('formulir/index');
    }
}
