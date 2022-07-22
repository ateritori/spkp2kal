<?php

namespace App\Controllers;

class User extends BaseController
{

    public function __construct()
    {
        $data['title'] = 'Halaman User';
        return view('user/index', $data);
    }

    public function index()
    {
        return view('user/index');
    }

    public function profil()
    {
        return view('user/profil');
    }

    public function input_nilai()
    {
        return view('user/input_nilai');
    }
}
