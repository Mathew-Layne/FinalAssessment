<?php

namespace App\Http\Livewire\Home;

use App\Models\Addon;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Livewire\Component;

class VehicleDetails extends Component
{
    public function render(Request $request)
    {
        
        return view('livewire.home.vehicle-details',[
            'details' => Vehicle::where('id', $request->id)->first(),
            'addons' => Addon::all(),
        ]);
    }
}
