<div>

    {{-- Large Form --}}
    <section
        class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Re-Schedule Appointment
                        </h6>
                        <i wire:click="$set('bookingform', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    {{-- {{ dd($clientlist) }} --}}
    
                    <form wire:submit.prevent="editBooked()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Booking Details
                        </h6>
    
                        <div class="flex flex-wrap">
    
                            <div class="flex flex-wrap">
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Client Name
                                        </label>
                                        <select
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.client">
    
                                            <option value="">Select Client</option>
                                            {{-- @foreach($clientlist as $clientData)
                                            <option value="{{ $clientData->id }}">{{ $clientData->first_name .' '.
                                                $clientData->last_name }}</option>
                                            @endforeach --}}
                                        </select>
                                        @error("booking.client")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Service
                                        </label>
                                        <select
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.service">
    
                                            <option value="">Select Service</option>
                                            {{-- @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                            @endforeach --}}
    
                                        </select>
                                        @error("booking.service")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Therapist Name
                                        </label>
                                        <select
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.therapist">
    
                                            <option value="">Select Therapist</option>
                                            {{-- @foreach($employees as $emp)
                                            <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                            @endforeach --}}
    
                                        </select>
                                        @error("booking.therapist")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Appointment Date
                                        </label>
                                        <input type="date"
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.date">
                                        @error("booking.date")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Appointment Time
                                        </label>
                                        <input type="time"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.time">
                                        @error("booking.time")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Booked By
                                        </label>
                                        <input
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.booked_by" placeholder="Enter Street Address">
                                        @error("booking.booked_by")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="ml-3 mt-3 ">
                                    <button>Button</button>
                                </div>
    
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    {{-- Small Form --}}

    <section
        class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-4/12 px-4 mt-6">
            <div
                class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Re-Schedule Appointment
                        </h6>
                        <i wire:click="$set('bookingform', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    {{-- {{ dd($clientlist) }} --}}
    
                    <form wire:submit.prevent="editBooked()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Booking Details
                        </h6>
    
                        <div class="flex flex-wrap">
    
                            <div class="flex flex-wrap w-full">                           
    
                                <div class="w-full px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Booked By
                                        </label>
                                        <input
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="booking.booked_by" placeholder="Enter Street Address">
                                        @error("booking.booked_by")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="ml-3 mt-3 ">
                                    <button>Button</button>
                                </div>
    
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
</div>
