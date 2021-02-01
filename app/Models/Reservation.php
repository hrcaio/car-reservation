<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['data_reserva', 'user_id', 'car_id'];

    public function users()
    {
        return $this->hasMany(App\User::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}

