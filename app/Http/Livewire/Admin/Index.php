<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.index',[
            'users' => User::count(),
            'vehicles' => count(Http::get('http://10.44.16.11:8080/api/vehicles')->json()),
            'bookings' => Reservation::count(),
            'bookingData' => Reservation::orderBy('id', 'desc')->get()->take(5),
        ]);
        
    }
}
