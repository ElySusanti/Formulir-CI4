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
    public function form4()
    {
        return view('Form-PKU/2_1_18');
    }
    public function form5()
    {
        return view('Form-PKU/2_1_19');
    }
    public function form6()
    {
        return view('Form-PKU/2_1_20');
    }
    public function form7()
    {
        return view('Form-PKU/2_1_21');
    }
    public function form8()
    {
        return view('Form-PKU/2_1_22');
    }
    public function form9()
    {
        return view('Form-PKU/2_1_11');
    }
    public function form10()
    {
        return view('Form-PKU/2_1_23');
    }
}
