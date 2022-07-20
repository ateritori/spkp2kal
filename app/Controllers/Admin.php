<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function kriteria()
    {
        return view('admin/kriteria');
    }

    public function alternatif()
    {
        return view('admin/alternatif');
    }

    public function prom()
    {
        return view('admin/prom');
    }

    public function topsis()
    {
        return view('admin/topsis');
    }
}
