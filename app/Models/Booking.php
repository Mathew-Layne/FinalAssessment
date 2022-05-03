<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
    use HasFactory;
}
