<div>

    @if ($vhclCategoryForm)
    <section
    class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
    <div class="w-full lg:w-4/12 px-4 mt-6">
        <div
            class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
            <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Vehicle Category
                    </h6>
                    <i wire:click="$set('vhclCategoryForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                {{-- {{ dd($clientlist) }} --}}

                <form wire:submit.prevent="addCategory()">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Category Details
                    </h6>

                    <div class="flex flex-wrap">

                        <div class="flex flex-wrap w-full">                           

                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Category Name
                                    </label>
                                    <input class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="categoryName" placeholder="Enter Category Name">
                                    @error("categoryName")<span class="text-xs text-red-600">{{
                                        $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="ml-3 mt-3 ">
                                <button type="submit">Add Category</button>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
    @endif

    @if ($vhclBrandForm)
    <section
    class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
    <div class="w-full lg:w-4/12 px-4 mt-6">
        <div
            class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
            <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Vehicle Brand
                    </h6>
                    <i wire:click="$set('vhclBrandForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                {{-- {{ dd($clientlist) }} --}}

                <form wire:submit.prevent="addBrand()">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Brand Details
                    </h6>

                    <div class="flex flex-wrap">

                        <div class="flex flex-wrap w-full">                           

                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Brand Name
                                    </label>
                                    <input
                                        class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="brandName" placeholder="Enter Brand Name">
                                    @error("brandName")<span class="text-xs text-red-600">{{
                                        $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="ml-3 mt-3 ">
                                <button type="submit">Add Brand</button>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    @endif
    @if($vhclForm)
    
    <section
        class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Vehicle
                        </h6>
                        <i wire:click="$set('vhclForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    {{-- {{ dd($clientlist) }} --}}
    
                    <form wire:submit.prevent="addVehicle()" enctype="multipart/form-data">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Vehicle Details
                        </h6>
    
                        <div class="flex flex-wrap">
    
                            <div class="flex flex-wrap">

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Vehicle Name
                                        </label>
                                        <input
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.name" placeholder="Enter Vehicle Name">
                                        @error("vehicle.name")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Vehicle Brand
                                        </label>
                                        <select
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.brand">
    
                                                <option value="">Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                        </select>

                                        @error("vehicle.brand")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">

                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Category
                                        </label>

                                        <select class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.category">
    
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach    
                                        </select>

                                        @error("vehicle.category")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Transmission
                                        </label>
                                        <select
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.trans">
    
                                            <option value="">Select Transmission</option>
                                            <option value="Auto">Auto</option>
                                            <option value="Manual">Manual</option>                                           
    
                                        </select>
                                        @error("vehicle.trans")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Fuel
                                        </label>
                                        <select class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.fuel">
    
                                            <option value="">Select Fuel</option>
                                            <option value="Diesel">Diesel</option>
                                            <option value="Electric">Electric</option>
                                            <option value="Gasoline">Gasoline</option>
                                              
                                        </select>
                                        @error("vehicle.fuel")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Mileage
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Mileage"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.mileage">
                                        @error("vehicle.mileage")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Year
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Year"
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.year">
                                        @error("vehicle.year")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Price
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Price"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.price">
                                        @error("vehicle.price")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-full px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Vehicle Image
                                        </label>
                                        <input type="file"
                                            class="border-0 px-3 py-3 text-white rounded w-full"
                                            wire:model="vehicle.img">
                                        @error("vehicle.img")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="ml-3 mt-3 ">
                                    <button type="submit">Add Vehicle</button>
                                </div>
    
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    @endif


    @if($vhclUpdateForm)
    
    <section
        class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Update Vehicle
                        </h6>
                        <i wire:click="$set('vhclUpdateForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    {{-- {{ dd($clientlist) }} --}}
    
                    <form wire:submit.prevent="updateVehicle()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Vehicle Details
                        </h6>
    
                        <div class="flex flex-wrap">
    
                            <div class="flex flex-wrap">

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Vehicle Name
                                        </label>
                                        <input
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.name" placeholder="Enter Vehicle Name">
                                        @error("vehicle.name")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Vehicle Brand
                                        </label>
                                        <select
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.brand">
    
                                                <option value="">Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                        </select>

                                        @error("vehicle.brand")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">

                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Category
                                        </label>

                                        <select class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.category">
    
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach    
                                        </select>

                                        @error("vehicle.category")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Transmission
                                        </label>
                                        <select
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.trans">
    
                                            <option value="">Select Transmission</option>
                                            <option value="Auto">Auto</option>
                                            <option value="Manual">Manual</option>                                           
    
                                        </select>
                                        @error("vehicle.trans")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Fuel
                                        </label>
                                        <select class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.fuel">
    
                                            <option value="">Select Fuel</option>
                                            <option value="Diesel">Diesel</option>
                                            <option value="Electric">Electric</option>
                                            <option value="Gasoline">Gasoline</option>
                                              
                                        </select>
                                        @error("vehicle.fuel")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Mileage
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Mileage"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.mileage">
                                        @error("vehicle.mileage")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Year
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Year"
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.year">
                                        @error("vehicle.year")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Price
                                        </label>
                                        <input type="number" placeholder="Enter Vehicle Price"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="vehicle.price">
                                        @error("vehicle.price")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>                               
    
                                <div class="ml-3 mt-3 ">
                                    <button type="submit">Update Vehicle</button>
                                </div>
    
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    @endif

    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3 mb-3">
            <h3 class="text-2xl font-semibold">Vehicle Listing </h3>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">

            <div class="flex justify-between mb-2">
                <div class="relative text-gray-600">
                    <input type="search" wire:model="search" placeholder="Search"
                        class="bg-white border border-gray-600 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                            width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mb-1 mt-5">
                <span wire:click="$toggle('vhclBrandForm')" class=" mx-2 cursor-pointer hover:underline">Add Brand</span>
                <span wire:click="$toggle('vhclCategoryForm')" class=" mx-2 cursor-pointer hover:underline">Add Category</span>
                <span wire:click="$toggle('vhclForm')" class=" mx-2 cursor-pointer hover:underline">Add Vehicle</span>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Vehicle Name</th>
                            <th class="px-4 py-3">Vehicle Type</th>
                            <th class="px-4 py-3">Fuel</th>
                            <th class="px-4 py-3">Mileage</th>
                            <th class="px-4 py-3">Year</th>                            
                            <th class="px-4 py-3">Price</th>                            
                            <th class="px-4 py-3">Transmission</th>                            
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        {{-- {{ dd($vehicles) }} --}}
                        @foreach($vehicles as $car)
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $car->vehicleBrand->name ." ". $car->name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $car->vehicleCategory->name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $car->fuel }}</td>
                            <td class="px-4 py-3 text-sm">{{ $car->mileage }}</td>
                            <td class="px-4 py-3 text-sm">{{ $car->year }}</td>                            
                            <td class="px-4 py-3 text-sm">${{ $car->price }}</td>                            
                            <td class="px-4 py-3 text-sm">{{ $car->transmission }}</td>                            
                            <td class="px-4 py-3 text-sm flex space-x-2 gap-3">
                                <button class="hover:text-green-500" wire:click="getId({{ $car->id }})">Update</button>
                                <button class="hover:text-red-500" wire:click="deleteVehicle({{ $car->id }})">Delete</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div
                class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <div class="">
                    {{ $vehicles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
