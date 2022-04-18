<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedAddon extends Model
{
    use HasFactory;

    public function addon(){
        return $this->belongsTo(Addon::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
