<?php

namespace App\Http\Livewire\User;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user.index',[
            'approved' => Reservation::where('user_id', Auth::id())->where('reserve_status', 'Approved')->count(),
            'denied' => Reservation::where('user_id', Auth::id())->where('reserve_status', 'Denied')->count(),
            'pending' => Reservation::where('user_id', Auth::id())->where('reserve_status', 'Pending')->count(),
            'bookingData' => Reservation::where('user_id', Auth::id())->where('reserve_status', 'Approved')->get(),
        ]);
    }
}
