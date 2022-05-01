<div>
    <div class="bg-gray-100">
        <header class="w-full h-96 bg-[url('/img/homebg.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0%, 100% 85%, 50% 100%, 0 85%);">
            <x-navbar/>
            <div class="h-[90%] w-full bg-black bg-opacity-80 overflow-hidden flex justify-center items-center" >
               
                <div class="text-center mb-12">
                    <div>
                        <h1 class="text-white font-bold text-6xl">Checkout</h1>
                    </div>               
    
                </div>
            </div>
        </header>
        
        <section class="w-full flex justify-center my-20">
            <div class="w-10/12 gap-5 flex">
                
                    <div class="w-4/6 p-5 bg-white">
                        
                            <div class="w-full text-center bg-[url('/img/lines.jpg')] py-5">
                                <h1 class="font-bold text-3xl">Checkout Details</h1>
                            </div>
                            <form class="w-4/6 m-auto my-20" wire:submit.prevent="">
                                <div class="flex gap-5 mb-5">
                                    <div class="w-1/2">
                                        <label class="font-bold text-sm" for="">First Name</label>
                                        <input class="w-full bg-gray-200 border-none" 
                                            type="text" wire:model="user.fname">
                                            @error("user.fname")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="w-1/2">
                                    <label class="font-bold text-sm" for="">Last Name</label>
                                    <input class="w-full bg-gray-200 border-none" 
                                        type="text" wire:model="user.lname">
                                        @error("user.lname")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                                </div>
                                </div>
                                
                                <div class=" mb-5">
                                    <label class="font-bold text-sm" for="">Phone Number</label>
                                    <input class="w-full bg-gray-200 border-none" 
                                        placeholder="Enter Phone Number" type="tel" wire:model="user.phone">
                                        @error("user.phone")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                                </div>
                                <div class=" mb-5">
                                    <label class="font-bold text-sm" for="">Email Address</label>
                                    <input class="w-full bg-gray-200 border-none" 
                                        type="email" wire:model="user.email">
                                        @error("user.email")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                                </div>

                                <button wire:click="reserveNow()" class="w-full bg-red-500 border-r-8 border-gray-600 text-white py-3">Reserve Now</button>
                            </form>
                            
                            <div class="drop-shadow-xl p-5">
                                <h1 class="text-xl font-bold mb-2">Vehicle Details</h1>
                                <div class="">
                                    <div class="flex justify-between">
                                        <div>
                                            {{ $reserve->vehicle->vehicleBrand->name.' '.$reserve->vehicle->name }} 
                                        </div>
                                        <div>
                                            ${{ $reserve->vehicle->price }}/Day
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            Transmission:
                                        </div>
                                        <div>
                                            {{ $reserve->vehicle->transmission }}
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            Mileage:
                                        </div>
                                        <div>
                                            {{ $reserve->vehicle->mileage }}
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            Fuel:
                                        </div>
                                        <div>
                                            {{ $reserve->vehicle->fuel }}
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            Year:
                                        </div>
                                        <div>
                                            {{ $reserve->vehicle->year }}
                                        </div>
                                    </div>                                    

                                    <h1 class="text-xl font-bold my-2">Rented Addon</h1>

                                    <div class="flex justify-between">
                                        <div>

                                        </div>
                                        <div>

                                        </div>
                                    </div>

                                    @forelse ($rentedAddons as $data)
                                    <div class="flex justify-between">
                                        <div>
                                            {{ $data->addon->name }}
                                        </div>
                                        <div>
                                            ${{ $data->addon->price }}/Day
                                        </div>
                                    </div> 
                                    @empty
                                        <h1 class="text-gray-500">No Addon Selected</h1>
                                    @endforelse                                   
                                   
                                </div>
                                
                            </div>
                        
                    </div>

                    

                    <div class="w-2/6">
                        <div class="bg-white mb-5 p-5 drop-shadow-xl">
                            <h1 class="text-red-500 font-extrabold text-2xl mb-2">Pay Now</h1> 
                            <div class="flex justify-between mb-1">
                                <h1 class="text-gray-500 font-bold">Rented Days:</h1>
                                <span class="font-bold">{{ $days }} Days</span>
                            </div>
                            <div class="flex justify-between mb-1">
                                <h1 class="text-gray-500 font-bold">Sub-Total:</h1>
                                <span class="font-bold">${{ $days * $reserve->vehicle->price }}.00</span>
                            </div>
                            <div class="flex justify-between mb-1">
                                <h1 class="text-gray-500 font-bold">Addon:</h1>
                                <span class="font-bold">${{ $rented ? $rented * $days : 0 }}.00</span>
                            </div>
                            <div class="flex justify-between border-t-2 border-gray-600 pt-2">
                                <h1 class="font-bold">Total:</h1>
                                <span class="text-xl font-extrabold text-red-500">${{ $rented ? $days * $reserve->vehicle->price + $rented * $days : $days * $reserve->vehicle->price }}.00</span>
                            </div>
                           
                        </div>

                        <div class="bg-white mb-5 p-5 shadow">
                            <h1 class="font-bold text-red-500 text-sm">{{ $reserve->vehicle->vehicleCategory->name }}</h1>
                            <h1 class="font-extrabold text-2xl">{{ $reserve->vehicle->vehicleBrand->name.' '.$reserve->vehicle->name }}</h1>
                            <div class="w-full px-14">
                                <img src="{{ url($reserve->vehicle->img) }}" alt="">
                            </div>
                            <div class="w-full flex justify-end">
                                <img class="w-24 -mt-6" src="{{ url('img/connect.png') }}" alt="">

                            </div>
                        </div>

                        <div class="bg-white p-5 shadow">
                            <h1 class="font-extrabold text-red-500 mb-2">Payment Details</h1>
                            <div class="mb-2">
                                <div>
                                    <input class="w-3 h-3" checked="checked" type="radio" name="payment" id="">
                                    <label class="font-bold" for="">Pay On Delivery</label>
                                </div>
                                <div class="text-gray-500 px-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>

                            <div class="">
                                <div>
                                    <input class="w-3 h-3" type="radio" name="payment" id="">
                                    <label class="font-bold" for="">Direct Transfer</label>
                                </div>
                                <div class="text-gray-500 px-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>               

            </div>
        </section>
    
          <x-footer/>
    </div>
</div>
