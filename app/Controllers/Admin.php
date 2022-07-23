<?php

namespace App\Controllers;

use \App\Models\joinuserModel;

class Admin extends BaseController
{

    public function __construct()
    {

        $this->model = new joinuserModel();
    }

    public function index()
    {
        $data['title'] = 'Dashboar Admin';
        $data['users'] = $this->model->getUsers()->getResult();
        return view('admin/index', $data);
    }

    public function editUser($user_id)
    {
        $data['title'] = 'Update User';
        $data['updateUser'] = $this->model->editUser($user_id)->getResult();
        return view('admin/update', $data);
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
