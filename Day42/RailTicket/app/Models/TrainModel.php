<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainModel extends Model
{
    use HasFactory;
    protected $table = 'trains';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'type', 'number', 'seat_count', 'route_id', 'date', 'departure_time', 'arrival_time',];
    public $timestamps = false;
}
