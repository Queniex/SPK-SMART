<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role'];

    public function getAccountByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}