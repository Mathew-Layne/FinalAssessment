<?php

namespace App\Http\Livewire\Home;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public $vhclSearch;

    public function search(){

        session(['search' => $this->vhclSearch]);
        
        return redirect()->route('vehicle.search');
    } 

    public function render()
    {
        date_default_timezone_set('Jamaica');
        
        return view('livewire.home.index',[
            'features' => Vehicle::orderBy('created_at', 'desc')->get()->take(3),
            'categories' => Http::get('http://10.44.16.100:8080/api/categories')->json(),
        ]);
    }
}
