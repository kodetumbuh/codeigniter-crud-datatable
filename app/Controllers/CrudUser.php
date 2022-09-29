<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CrudUser extends BaseController
{
    public function index()
    {
       return view('user/crud');
    }

    public function tentang_user()
    {
       return view('user/tentang');
    }

    public function github_user()
    {
       return view('user/tentang');
    }



}
