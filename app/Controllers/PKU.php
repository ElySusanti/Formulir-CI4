<?php

namespace App\Controllers;

class PKU extends BaseController
{
    public function index()
    {
        return view('dashboard-PKU');
    }
    public function form1()
    {
        return view('Form-PKU/ringkasan-pulang');
    }
    public function form2()
    {
        return view('Form-PKU/perencanaan-pemulangan');
    }
    public function form3()
    {
        return view('Form-PKU/2_1_17');
    }
}
