<?php

namespace App\Controllers;

class User extends BaseController
{
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
