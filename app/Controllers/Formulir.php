<?php


namespace App\Controllers;

use App\Models\Assessment_model;

class Formulir extends BaseController
{
    protected $mdata;
    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }
    public function index()
    {
        return view('halaman_utama');
    }
    public function satu()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformsatu' => $tampildata,
        );

        return view('form/persetujuan-anastesi', $info);
    }
    public function dua()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformdua' => $tampildata,
        );

        return view('form/daftar-tilik-keselamatan-pasien', $info);
    }
    public function tiga()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformtiga' => $tampildata,
        );

        return view('form/laporan-pemakaian-instrument', $info);
    }
    public function empat()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformempat' => $tampildata,
        );

        return view('form/pengkajian-awal', $info);
    }
    public function lima()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformlima' => $tampildata,
        );

        return view('form/radiologi-online', $info);
    }
    public function enam()
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformenam' => $tampildata,
        );

        return view('form/lab-online', $info);
    }
}
