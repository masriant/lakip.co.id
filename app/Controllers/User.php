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

    public function edit($id = 0): string
    {
        $data['title'] = 'Edit User';

        $db       = \Config\Database::connect();
        $builder  = $db->table('users');

        $builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['users'] = $query->getRow();

        // if (empty($data['user'])) {
        //     return redirect()->to('/admin');
        // }


        return view('user/edit/', $data);
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
