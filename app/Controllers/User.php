<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');
    
    }
    // -------------------------------------------------

    public function index(): string
    {
        // $data[ 'title' ] = "Member Area";
        // return view('user/index', $data);

        $data['title'] = 'My Profile';

        return view('user/index', $data);
    }

    public function edit($id = 0): string
    {
        $data['title'] = ' User Edit';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active,updated_at');
    $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
    $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    $this->builder->where('users.id', $id);
    $query = $this->builder->get();

    $data['users'] = $query->getRow();

    // if (empty($data['user'])) {
    //     return redirect()->to('/admin');
    // }
        



        return view('user/edit', $data);
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
