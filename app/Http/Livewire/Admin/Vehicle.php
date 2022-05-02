<?php

namespace App\Http\Livewire\Admin;

use App\Models\Vehicle as ModelsVehicle;
use App\Models\VehicleBrand;
use App\Models\VehicleCategory;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Vehicle extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $vhclForm = false;
    public $vhclUpdateForm = false;
    public $vhclBrandForm = false;
    public $vhclCategoryForm = false;

    public $brandName, $categoryName, $vehicle, $updateId;

    public function addBrand(){

        $this->validate([
            'brandName' => 'required|unique:vehicle_brands,name'
        ]);

        Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->post('http://10.44.16.11:8080/api/brands',[
            'name' => $this->brandName
        ]);

        $this->vhclBrandForm = false;
    }

    



    public function addCategory(){

        $this->validate([
            'categoryName' => 'required|unique:vehicle_categories,name'
        ]);

        Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->post('http://10.44.16.11:8080/api/categories',[
            'name' => $this->categoryName
        ]);

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

        $filename = $this->vehicle['img']->getClientOriginalName();        
        $filePath = $this->vehicle['img']->storeAs('public', $filename);

        Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->post('http://10.44.16.11:8080/api/vehicles',[
            'name' => $this->vehicle['name'],
            'vehicle_brand_id' => $this->vehicle['brand'],
            'vehicle_category_id' => $this->vehicle['category'],
            'transmission' => $this->vehicle['trans'],
            'mileage' => $this->vehicle['mileage'],
            'year' => $this->vehicle['year'],
            'price' => $this->vehicle['price'],
            'fuel' => $this->vehicle['fuel'],
            'img' => $filePath,
        ]);

        $this->vhclForm = false;
    }

    public function getId($id){
        $this->vhclUpdateForm = true;
        $this->updateId = $id;

        $currentData = Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->get('http://10.44.16.11:8080/api/vehicles/'.$id)->object();
        
            $this->vehicle['name'] = $currentData->name;
            $this->vehicle['brand'] = $currentData->vehicle_brand_id;
            $this->vehicle['category'] = $currentData->vehicle_category_id;
            $this->vehicle['trans'] = $currentData->transmission;
            $this->vehicle['mileage'] = $currentData->mileage;
            $this->vehicle['year'] = $currentData->year;
            $this->vehicle['price'] = $currentData->price;
            $this->vehicle['fuel'] = $currentData->fuel;
    }


    public function updateVehicle(){
        $this->validate([
            'vehicle.name' => 'required',
            'vehicle.brand' => 'required',
            'vehicle.category' => 'required',
            'vehicle.trans' => 'required',
            'vehicle.mileage' => 'required',
            'vehicle.year' => 'required',
            'vehicle.price' => 'required',
            'vehicle.fuel' => 'required',
        ]);   
        // dd($this->vehicle['name']);
        Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->put('http://10.44.16.11:8080/api/vehicles/'.$this->updateId,[
            'name' => $this->vehicle['name'],
            'vehicle_brand_id' => $this->vehicle['brand'],
            'vehicle_category_id' => $this->vehicle['category'],
            'transmission' => $this->vehicle['trans'],
            'mileage' => $this->vehicle['mileage'],
            'year' => $this->vehicle['year'],
            'price' => $this->vehicle['price'],
            'fuel' => $this->vehicle['fuel'],
        ]);

        $this->vhclUpdateForm = false;
    }

    public function deleteVehicle($id){
        Http::withToken('1|bCbuW5HR50s46gNyOM3arOtjFeeOSqi4zvPPDQXd')->delete('http://10.44.16.11:8080/api/vehicles/'.$id);
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
