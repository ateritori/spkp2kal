<?php

namespace App\Models;

use CodeIgniter\Model;

class joinuserModel extends Model
{
    public function getUsers()
    {
        return $this->db->table('users')->join('auth_groups_users', 'auth_groups_users.user_id=users.id')->join('auth_groups', 'auth_groups.id=auth_groups_users.user_id')->get()->getResultArray();
    }
}
