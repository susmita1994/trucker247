<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        return view('user/login');
    }

    public function signup(){
        return view('user/register');
    }
    
}
