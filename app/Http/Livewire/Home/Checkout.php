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
    public $user, $intval, $addonSum, $rentedAddon;

    public function mount(){
        $userData = User::where('id', Auth::id())->first();
        $this->user['fname'] = $userData->first_name;
        $this->user['lname'] = $userData->last_name;
        $this->user['phone'] = $userData->phone;
        $this->user['email'] = $userData->email;
       
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

        
        $reserve = Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->first();
        
        $bookings = new Booking();
        $bookings->reservation_id = $reserve->id;
        $bookings->total = $this->intval * $this->addonSum + $this->intval * $reserve->vehicle->price;
        $bookings->save();
        
        Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->update([
            'cart_status' => 'Booked'
        ]);         
        
        return redirect('/');

    }

    public function render()
    {
        $days = Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->first();
        $day1 = date_create($days->pickup_date);
        $day2 = date_create($days->dropoff_date);
        $this->intval = $day1->diff($day2)->d;

        $addonSum = 0;
        
        $rentedAddon = RentedAddon::where('reservation_id', $days->id)->with('addon')->get();

        // dd($rentedAddon);
        foreach($rentedAddon as $data){
            $this->addonSum += $data->addon->price;
        }
      

        return view('livewire.home.checkout', [
            'reserve' => Reservation::where('user_id', Auth::id())->where('cart_status', 'Cart')->first(),
            'days' => $this->intval,
            'rented' => $this->addonSum,
            'rentedAddons' => $rentedAddon,
        ]);
    }
}
