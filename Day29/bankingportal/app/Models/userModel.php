<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['name', 'email', 'password'];
}
