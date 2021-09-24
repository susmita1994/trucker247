<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/home');
    }

    public function feature(){
        return view('user/feature');
    }
    public function pricing(Type $var = null)
    {
        # code...
    }
}
