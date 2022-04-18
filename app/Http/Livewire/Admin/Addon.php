<?php

namespace App\Http\Livewire\Admin;

use App\Models\Addon as ModelsAddon;
use Livewire\Component;

class Addon extends Component
{
    public $addonForm = false;
    public $addon;

    public function addAddon(){
        $this->validate([
            'addon.name' => 'required',
            'addon.price' => 'required',
        ]);

        $addon = new ModelsAddon();
        $addon->name = $this->addon['name'];
        $addon->price = $this->addon['price'];
        $addon->save();

        $this->addonForm = false;

    }

    public function render()
    {
        return view('livewire.admin.addon', [
            'addons' => ModelsAddon::all(),
        ]);
    }
}
