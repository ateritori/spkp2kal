<?php

namespace App\Controllers;

use \App\Models\joinuserModel;

class Admin extends BaseController
{

    public function __construct()
    {

        $model = new joinuserModel();
        $data['users'] = $model->getUsers();
        $data['title'] = 'Halaman Admin';
        return view('admin/index', $data);
    }

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
