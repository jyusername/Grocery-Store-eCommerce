<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // The name of your users table
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password']; // Adjust based on your user table structure

    public function getUser($username)
    {
        return $this->where('username', $username)->first();
    }
}
