<?php

namespace App\Http\Livewire\Home;

use App\Models\Booking;
use App\Models\RentedAddon;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $user, $intval, $addonSum, $rentedAddon, $reserve;

    public function mount(){
        $this->reserve = Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->orderBy('id', 'desc')->first();

        $userData = User::where('id', Auth::id())->first();
        $this->user['fname'] = $userData->first_name;
        $this->user['lname'] = $userData->last_name;
        $this->user['phone'] = $userData->phone;
        $this->user['email'] = $userData->email;

        $day1 = date_create($this->reserve->pickup_date);
        $day2 = date_create($this->reserve->dropoff_date);
        $this->intval = $day1->diff($day2)->d;

        $this->addonSum = 0;

        $this->rentedAddon = RentedAddon::where('reservation_id', $this->reserve->id)->with('addon')->get();

        // dd($rentedAddon);
        foreach ($this->rentedAddon as $data) {
            $this->addonSum += $data->addon->price;
        }
       
    }

    public function reserveNow(){

        $this->validate([
            'user.fname' => 'required',
            'user.lname' => 'required',
            'user.phone' => 'required',
            'user.email' => 'required',
        ]);

        User::where('id', Auth::id())->update([
            'first_name' => $this->user['fname'],
            'last_name' => $this->user['lname'],
            'phone' => $this->user['phone'],
            'email' => $this->user['email'],
        ]);   

        
        $bookings = new Booking();
        $bookings->reservation_id = $this->reserve->id;
        $bookings->total = $this->intval * $this->addonSum + $this->intval * $this->reserve->vehicle->price;
        $bookings->save();
        
        Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->update([
            'cart_status' => 'Booked'
        ]);         
        
        return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.home.checkout', [
            'reserve' => $this->reserve,
            'days' => $this->intval,
            'rented' => $this->addonSum,
            'rentedAddons' => $this->rentedAddon,
        ]);
    }
}
