<?php

namespace App\Http\Livewire\Admin;

use App\Models\Vehicle as ModelsVehicle;
use App\Models\VehicleBrand;
use App\Models\VehicleCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Vehicle extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $vhclForm = false;
    public $vhclBrandForm = false;
    public $vhclCategoryForm = false;

    public $brandName, $categoryName, $vehicle;

    public function addBrand(){

        $this->validate([
            'brandName' => 'required|unique:vehicle_brands,name'
        ]);

        $brand = new VehicleBrand();
        $brand->name = $this->brandName;
        $brand->save();

        $this->vhclBrandForm = false;
    }

    public function addCategory(){

        $this->validate([
            'categoryName' => 'required|unique:vehicle_categories,name'
        ]);

        $category = new VehicleCategory();
        $category->name = $this->categoryName;
        $category->save();

        $this->vhclCategoryForm = false;
    }

    public function addVehicle(){
        $this->validate([
            'vehicle.name' => 'required',
            'vehicle.brand' => 'required',
            'vehicle.category' => 'required',
            'vehicle.trans' => 'required',
            'vehicle.mileage' => 'required',
            'vehicle.year' => 'required',
            'vehicle.price' => 'required',
            'vehicle.fuel' => 'required',
            'vehicle.img' => 'required|image',
        ]);

        // dd($this->vehicle);

        $filename = $this->vehicle['img']->getClientOriginalName();        
        $filePath = $this->vehicle['img']->storeAs('public', $filename);

        $vehicle = new ModelsVehicle();
        $vehicle->name = $this->vehicle['name'];
        $vehicle->vehicle_brand_id = $this->vehicle['brand'];
        $vehicle->vehicle_category_id = $this->vehicle['category'];
        $vehicle->transmission = $this->vehicle['trans'];
        $vehicle->mileage = $this->vehicle['mileage'];
        $vehicle->year = $this->vehicle['year'];
        $vehicle->price = $this->vehicle['price'];
        $vehicle->fuel = $this->vehicle['fuel'];
        $vehicle->img = $filePath;
        $vehicle->save();

        $this->vhclForm = false;
    }

    public function render()
    {
        return view('livewire.admin.vehicle',[
        'brands' => VehicleBrand::all(), 
        'categories' => VehicleCategory::all(),
        'vehicles' => ModelsVehicle::with('vehicleBrand', 'vehicleCategory')->paginate(5),
        ]);
    }
}
