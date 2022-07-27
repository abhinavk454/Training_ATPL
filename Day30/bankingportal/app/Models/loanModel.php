<?php

namespace App\Models;

use CodeIgniter\Model;

class loanModel extends Model
{
    protected $table = 'loan';
    protected $primaryKey = 'loan_id';
    protected $allowedFields = ['user_id', 'loan_amount', 'loan_duration', 'loan_interest', 'loan_status'];
}
