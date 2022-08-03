<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationModel extends Model
{
    use HasFactory;
    protected $table = 'stations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'coordinate_x', 'coordinate_y'];
    public $timestamps = false;
}
