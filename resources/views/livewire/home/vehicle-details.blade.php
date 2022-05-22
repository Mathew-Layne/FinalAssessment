<div>
    <div class="bg-gray-100">
        <header class="w-full h-[450px] md:h-96 bg-[url('/img/homebg.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0%, 100% 85%, 50% 100%, 0 85%);">
            <x-navbar/>
            <div class="h-full w-full bg-black bg-opacity-80 overflow-hidden flex justify-center items-center" >
               
                <div class="text-center mb-12">
                    <div>
                        <h1 class="text-white font-bold text-6xl">Vehicle Details</h1>
                    </div>               
    
                </div>
            </div>
        </header>
        
        <section class="flex justify-center my-20">
            <div class="w-9/12 md:flex justify-center gap-6">
                <div class="md:w-4/6 drop-shadow-xl">
                    <div class="border-l-4 border-red-500 py-6 pl-10 text-black font-bold bg-top text-2xl bg-cover bg-[url('/img/lines.jpg')] mb-5">
                        {{ $details->vehicleBrand->name ." ". $details->name }}
                    </div>
                    <div class="w-full border-2 shadow p-10">
                        <img class="w-full" src="{{ url($details->img) }}" alt="">
                    </div>
                    <div class="">
                        <div class="border-l-4 border-red-500 py-3 pl-10 text-black font-bold bg-top text-2xl bg-cover bg-[url('/img/lines.jpg')] my-5">
                            Vehicle Description
                        </div>
                        <div class="pt-8 pb-20 px-10 bg-gray-50">
                            <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut! Delectus ipsam debitis distinctio aperiam enim commodi accusantium illo dolore impedit repellendus consectetur alias nemo aliquam numquam tempora, et cumque.</p>
                            <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut! Delectus ipsam debitis distinctio aperiam enim commodi accusantium illo dolore impedit repellendus consectetur alias nemo aliquam numquam tempora, et cumque.</p>
                            <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut! Delectus ipsam debitis distinctio aperiam enim commodi accusantium illo dolore impedit repellendus consectetur alias nemo aliquam numquam tempora, et cumque.</p>
                            <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut! Delectus ipsam debitis distinctio aperiam enim commodi accusantium illo dolore impedit repellendus consectetur alias nemo aliquam numquam tempora, et cumque.</p>
                        </div>                        
                    </div>
    
                </div>
    
                {{-- {{ dd($details) }} --}}
                <div class="md:w-2/6 md:h-fit bg-gray-50 md:pb-10 drop-shadow-xl">
                    <div class="bg-black text-white font-bold text-center py-5">
                        ${{ $details->price }}/ day
                    </div>
                    <div class="w-full pt-10 px-10">
                        <form class="" wire:submit.prevent="reserveNow()">
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">PICK-UP LOCATION</label>
                                <select wire:model="pickupLocation" class="w-full my-2 bg-gray-300 border-none">
                                    <option value="">Select Location</option>
                                    <option value="Kingston">Kingston</option>
                                    <option value="Norman Manley Airport">Norman Manley Airport</option>
                                    <option value="St. Andrew">St. Andrew</option>
                                    <option value="St. Catherine">St. Catherine</option>
                                </select>
                                @error("pickupLocation")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">DROP-OFF LOCATION</label>
                                <select wire:model="dropoffLocation" class="w-full my-2 bg-gray-300 border-none">
                                    <option value="">Select Location</option>
                                    <option value="Kingston">Kingston</option>
                                    <option value="Norman Manley Airport">Norman Manley Airport</option>
                                    <option value="St. Andrew">St. Andrew</option>
                                    <option value="St. Catherine">St. Catherine</option>
                                </select>
                                @error("dropoffLocation")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">PICK-UP DATE</label>
                                <input wire:model="pickupDate" class="w-full my-2 bg-gray-300 border-none" type="date" min="{{ date('Y-m-d') }}">
                                @error("pickupDate")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">DROP-OFF DATE</label>
                                <input wire:model="dropoffDate" class="w-full my-2 bg-gray-300 border-none" type="date" min="{{ date('Y-m-d') }}">
                                @error("dropoffDate")<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                            </div>

                            <div>
                                <h1 class="font-bold text-gray-700 underline mt-10 mb-5">
                                    RENTED ADD-ONS
                                </h1>
                            </div>

                            <div>
                                @foreach ($addons as $addon)
                                    
                                <div class="flex w-full justify-between border-b font-bold items-center mb-5">
                                    <div class="flex ">
                                        <input wire:model="addonArr" class="mr-2 rounded" type="checkbox" value="{{ $addon->id }}">
                                        <h3>{{ $addon->name }}</h3>
                                    </div>
                                    <div>
                                        <h4 class="text-red-500">${{ $addon->price }}/Day</h4>
                                    </div>
                                </div> 
                                @endforeach

                                <div class="">
                                    <button class="bg-red-500 text-white py-4 w-full border-r-8 border-gray-600">Reserve Now</button>
                                </div>
                            </div>
    
                        </form>
                    </div>
                    
                </div>
    
            </div>
        </section>
    
          <x-footer/>
    </div>
</div>
