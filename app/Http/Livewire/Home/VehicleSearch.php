<?php

namespace App\Http\Livewire\Home;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class VehicleSearch extends Component
{
    public $vhclSearch;

    public function mount(Request $request){
        $this->vhclSearch = $request->id;
    }

    public function render()
    {
        return view('livewire.home.vehicle-search',[
            'vehicleList' => Vehicle::where('vehicle_category_id', session('search'))->get(),
            // 'vehicleList' => Http::get('http://10.44.16.100:8080/api/vehicles')->json()
        ]);
    }
}
