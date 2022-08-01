<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteModel extends Model
{
    use HasFactory;
    protected $table = 'routes';
    protected $fillable = ['src_id', 'dest_id'];

    public function getSrc()
    {
        return $this->belongsTo(StationModel::class, 'src_id', 'id');
    }
    public function getDest()
    {
        return $this->belongsTo(StationModel::class, 'dest_id', 'id');
    }
    public function getTrains()
    {
        return $this->hasMany(TrainModel::class, 'id');
    }
}
