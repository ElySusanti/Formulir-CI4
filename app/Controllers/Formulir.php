<?php


namespace App\Controllers;

use App\Models\Assessment_model;
use App\Models\CONTOHModel;

class Formulir extends BaseController
{
    protected $Assessment_model;
    protected $CONTOHModel;
    public function __construct()
    {
        $this->Assessment_model = new Assessment_model();
        $this->CONTOHModel = new CONTOHModel();
    }
    public function index()
    {
        return view('halaman_utama');
    }
    public function satu()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformsatu' => $tampildata,
        );

        return view('form/persetujuan-anastesi', $info);
    }
    public function dua()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformdua' => $tampildata,
        );

        return view('form/daftar-tilik-keselamatan-pasien', $info);
    }
    public function tiga()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformtiga' => $tampildata,
        );

        return view('form/laporan-pemakaian-instrument', $info);
    }
    public function empat()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformempat' => $tampildata,
        );

        return view('form/pengkajian-awal', $info);
    }
    public function lima()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformlima' => $tampildata,
        );

        return view('form/radiologi-online', $info);
    }
    public function enam()
    {
        $tampildata =  $this->Assessment_model->tampildata();

        $info = array(
            'dataAssessmentformenam' => $tampildata,
        );

        return view('form/lab-online', $info);
    }
    public function add_aksi()
    {
        $simpan['contoh'] =  $this->CONTOHModel->simpan();

        return redirect()->to('formulir/index');
    }
}
