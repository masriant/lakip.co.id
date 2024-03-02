<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        // $data[ 'title' ] = "Member Area";
        // return view('user/index', $data);

        $data['title'] = 'My Profile';
        

            

        return view('user/index', $data);
    }

    // public function index(): string
    // {
    //     return view('auth/login');
    // }

    // public function register(): string
    // {
    //     return view('auth/register');
    // }

}
