<?php

namespace App\Controllers;

use \App\Models\joinuserModel;

class Admin extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
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
        $data['title'] = 'Edit User';
        $data['updateUser'] = $this->model->editUser($user_id)->getResult();
        return view('admin/update', $data);
    }

    public function updateUser()
    {
        $data['title'] = 'Edit User';
        $user_id = $this->request->getVar('user_id');
        $updatedataUser = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'active' => $this->request->getVar('status'),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        $updatedatauserRole = [
            'group_id' => $this->request->getVar('role'),
        ];
        $this->model->updateUser($user_id, $updatedataUser);
        $this->model->updatedatauserRole($user_id, $updatedatauserRole);
        return redirect()->to('admin');
    }

    public function deleteUser()
    {
        $user_id = $this->request->getVar('user_id');
        $datadeleteUser = [
            'deleted_at' => date("Y-m-d H:i:s"),
        ];
        $this->model->deleteUser($user_id, $datadeleteUser);
        return redirect()->to('admin');
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
