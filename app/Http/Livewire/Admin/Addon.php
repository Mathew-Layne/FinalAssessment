<?php

namespace App\Http\Livewire\Admin;

use App\Models\Addon as ModelsAddon;
use Livewire\Component;

class Addon extends Component
{
    public $addonForm = false;
    public $deleteAlert = false;
    public $updateAddonForm = false;
    public $addon, $addonId;

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

    public function getId($id){
        $this->updateAddonForm = true;
        $this->addonId = $id;

        $data = ModelsAddon::where('id', $id)->first();
        $this->addon['name'] = $data->name;
        $this->addon['price'] = $data->price;
    }

    public function updateAddon(){
        
        ModelsAddon::where('id', $this->addonId)->update([
            'name' => $this->addon['name'],
            'price' => $this->addon['price'],
        ]);

        $this->updateAddonForm = false;
    }

    public function deleteAddon($id){
        ModelsAddon::find($id)->delete();
        $this->deleteAlert = true;
    }

    public function render()
    {
        return view('livewire.admin.addon', [
            'addons' => ModelsAddon::all(),
        ]);
    }
}
