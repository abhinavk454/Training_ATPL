<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketModel extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = ['user_id', 'train_id', 'seat_number', 'price', 'journey_date', 'passenger_id'];
    protected $primaryKey = 'id';

    public function getUser()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
    public function getTrain()
    {
        return $this->belongsTo(TrainModel::class, 'train_id', 'id');
    }
    public function getPassenger()
    {
        return $this->belongsTo(PassengerModel::class, 'passenger_id', 'id');
    }
    public $timestamps = false;
}
