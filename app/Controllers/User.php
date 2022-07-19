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
}
