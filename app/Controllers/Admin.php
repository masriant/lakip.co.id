<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');
    
    }
    
    // -------------------------------------------------------------------------------------------------------------------

    public function index(): string
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // $db       = \Config\Database::connect();
        // $builder  = $db->table('users');
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, active');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
		// $data['users'] = $query->getResultArray();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    // -------------------------------------------------------------------------------------------------------------------
    
    public function detail($id = 0): string
    {
        $data['title'] = 'User Details';
        
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();
        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }
            

        return view('admin/detail', $data);
    }

// -------------------------------------------------------------------------------------------------------------------

public function activation(): string
{
    $data['title'] = 'Aktifkan User';
    
    $this->builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active');
    $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
    $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    // $this->builder->where('users.id', $id);
    $query = $this->builder->get();

    $data['users'] = $query->getResult();

    // if (empty($data['user'])) {
    //     return redirect()->to('/admin');
    // }
        

    return view('admin/activation', $data);
}



// -------------------------------------------------------------------------------------------------------------------

public function activate($id = 0): string
{
    $data['title'] = 'Aktifkan User';
    
    $this->builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active');
    $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
    $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    $this->builder->where('users.id', $id);
    $query = $this->builder->get();

    $data['users'] = $query->getRow();

    // if (empty($data['user'])) {
    //     return redirect()->to('/admin');
    // }
        

    return view('admin/activation', $data);
}



// -------------------------------------------------------------------------------------------------------------------


public function edit($id = 0): string
{
    $data['title'] = 'Edit User';
    
    $this->builder->select('users.id as userid, username, email, fullname, user_image, name, activate_hash, active');
    $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
    $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    $this->builder->where('users.id', $id);
    $query = $this->builder->get();

    $data['users'] = $query->getRow();

    // if (empty($data['user'])) {
    //     return redirect()->to('/admin');
    // }
        

    return view('admin/edit', $data);
}



// -------------------------------------------------------------------------------------------------------------------

// public function index(): string
// {
    //     return view('auth/login');
    // }

    // public function register(): string
    // {
        //     return view('auth/register');
        // }

}
