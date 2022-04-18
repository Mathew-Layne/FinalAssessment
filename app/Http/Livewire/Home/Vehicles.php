<?php

namespace App\Http\Livewire\Home;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Vehicles extends Component
{
    public function render()
    {
        // $vehicleList = Http::get('https://6257865374007111adf871d6.mockapi.io/v1/vehicles')->object();
        $vehicleList = Vehicle::all();
        // dd($vehicleList);
        return view('livewire.home.vehicles', ['vehicleList' => $vehicleList]);
    }
}
