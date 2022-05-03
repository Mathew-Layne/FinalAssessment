<?php

namespace App\Http\Livewire\User;

use App\Models\Reservation as ModelsReservation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reservation extends Component
{
    public function render()
    {
        return view('livewire.user.reservation',[
            'bookingData' => ModelsReservation::where('user_id', Auth::id())->with('booking')->get(),
        ]);
    }
}
