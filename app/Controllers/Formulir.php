<?php

namespace App\Controllers;

class Formulir extends BaseController
{
    public function satu()
    {
        return view('persetujuan-anastesi');
    }
    public function dua()
    {
        return view('daftar-tilik-keselamatan-pasien');
    }
    public function tiga()
    {
        return view('laporan-pemakaian-instrument');
    }
    public function empat()
    {
        return view('pengkajian-awal');
    }
    public function lima()
    {
        return view('radiologi-online');
    }
    public function enam()
    {
        return view('lab-online');
    }
}
