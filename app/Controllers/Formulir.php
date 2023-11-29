<?php


namespace App\Controllers;

class Formulir extends BaseController
{
    public function index()
    {
        return view('halaman_utama');
    }
    public function satu()
    {
        return view('form/persetujuan-anastesi');
    }
    public function dua()
    {
        return view('form/daftar-tilik-keselamatan-pasien');
    }
    public function tiga()
    {
        return view('form/laporan-pemakaian-instrument');
    }
    public function empat()
    {
        return view('form/pengkajian-awal');
    }
    public function lima()
    {
        return view('form/radiologi-online');
    }
    public function enam()
    {
        return view('form/lab-online');
    }
}
