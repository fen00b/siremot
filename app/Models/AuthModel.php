<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    const SESSION_KEY = 'user_id';
    protected $allowedFields = [
        'id',
        'username',
        'password',
        'created_at',
        'last_login',
        'updated_at'

    ];
}
