<?php

namespace App\Models;

use CodeIgniter\Model;

class joinuserModel extends Model
{
    protected $db, $builder, $uri, $request;

    public function __construct()
    {
        parent::__construct();
        $this->request = \Config\Services::request();
        $this->db = db_connect();
        $this->builder = $this->db->table('users');
    }

    public function getUsers()
    {
        $this->builder->select('*');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        return $this->builder->get();
    }

    public function updateUser()
    {
        $id = $this->request->uri->getSegment(2);
        $this->builder->select('*');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        return $this->builder->get();
    }
}
