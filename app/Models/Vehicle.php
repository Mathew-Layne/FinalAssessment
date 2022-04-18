<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function vehicleBrand(){
        return $this->belongsTo(VehicleBrand::class);
    }

    public function vehicleCategory(){
        return $this->belongsTo(VehicleCategory::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
