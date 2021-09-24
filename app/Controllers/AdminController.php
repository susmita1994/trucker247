<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        return view('admin/dashboard');
    }

}