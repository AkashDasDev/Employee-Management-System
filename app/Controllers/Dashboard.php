<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->has('user')) {
        echo view('dashboard');
        } else {
            return redirect()->to(base_url('login'))->with('error', 'Invalid Login Credentials');

        }
    }
}