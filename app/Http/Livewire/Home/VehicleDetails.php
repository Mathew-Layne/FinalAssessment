<?php

namespace App\Http\Livewire\Home;

use App\Models\Addon;
use App\Models\RentedAddon;
use App\Models\Reservation;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VehicleDetails extends Component
{
    public $pickupDate, $dropoffDate, $pickupLocation, $dropoffLocation, $details, $vhclId;
    public $addonArr = [];

    public function mount(Request $request){
        $this->vhclId = $request->id;
    }

    public function reserveNow(){
        $this->validate([
            'pickupDate' => 'required',
            'pickupLocation' => 'required',
            'dropoffDate' => 'required',
            'dropoffLocation' => 'required',
        ]);

        $reserve = new Reservation();
        $reserve->pickup_location = $this->pickupLocation;
        $reserve->pickup_date = $this->pickupDate;
        $reserve->dropoff_location = $this->dropoffLocation;
        $reserve->dropoff_date = $this->dropoffDate;
        $reserve->user_id = Auth::id();
        $reserve->vehicle_id = $this->vhclId;
        $reserve->save();

        // dd();

        if($this->addonArr){
            foreach($this->addonArr as $addonData){
                $rented = new RentedAddon();
                $rented->reservation_id = $reserve->id;
                $rented->addon_id = $addonData; 
                $rented->save();
            }
        }

        return redirect()->route('checkout');
    }

    public function render(Request $request)
    {
        date_default_timezone_set('Jamaica');

        $this->details = Vehicle::where('id', $this->vhclId)->with('vehicleBrand')->first();
        
        return view('livewire.home.vehicle-details',[
            'details' => $this->details,
            'addons' => Addon::all(),
        ]);
    }
}
