<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerModel extends Model
{
    use HasFactory;
    protected $table = 'passengers';
    protected $fillable = ['user_id', 'name', 'age', 'gender', 'email'];

    public function getUser()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
    public $timestamps = false;
}
