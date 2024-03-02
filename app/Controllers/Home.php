<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data[ 'title' ] = "Login Form";
        return view('auth/login', $data);
    }

    public function register(): string
    {
        $data[ 'title' ] = "Register Form";
        return view('auth/register', $data);
    }
    
    public function user(): string
    {
        $data[ 'title' ] = "User Profile";
        return view('user/index', $data);
    }
}
