<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class joinuserModel extends Model
{
    protected $db, $builder, $uri, $request;

    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function getUsers()
    {
        $this->builder = $this->db->table('users');
        $this->builder->select('*');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('deleted_at', Null);
        return $this->builder->get();
    }

    public function editUser($user_id)
    {
        $this->builder = $this->db->table('users');
        $this->builder->select('*');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        return $this->builder->getWhere(['users.id' => $user_id]);
    }

    public function updateUser($user_id, $updatadataUser)
    {
        $this->builder = $this->db->table('users');
        $this->builder->set($updatadataUser, false);
        $this->builder->where('id', $user_id);
        $this->builder->update();
    }

    public function deleteUser($user_id, $datadeleteUser)
    {
        $this->builder = $this->db->table('users');
        $this->builder->set($datadeleteUser, false);
        $this->builder->where('id', $user_id);
        $this->builder->update();
    }

    public function updatedatauserRole($user_id, $updatedatauserRole)
    {
        $this->builder = $this->db->table('auth_groups_users');
        $this->builder->set($updatedatauserRole, false);
        $this->builder->where('user_id', $user_id);
        $this->builder->update();
    }
}
