<?php

namespace App\Http\Livewire\Home;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Vehicles extends Component
{
    public function render()
    {
        $vehicleList = Http::get('http://10.44.16.100:8080/api/vehicles')->json();
        // $vehicleList = Vehicle::all();
        // dd($vehicleList);
        return view('livewire.home.vehicles', ['vehicleList' => $vehicleList]);
        // withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->
    }
}
