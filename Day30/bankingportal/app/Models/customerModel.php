<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['name', 'email', 'password', 'account_number', 'balance'];
}
