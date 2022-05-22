<div>
    @if ($bookingDetails)
    <section
    class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
    <div class="w-full lg:w-4/12 px-4 mt-6">
        <div
            class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
            <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <div class="text-center flex justify-between mb-3">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Reservation Details
                    </h6>
                    <i wire:click="$set('bookingDetails', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
               <div class="flex justify-between mb-2">
                   <div>
                    Customer Name
                   </div>
                   <div>
                    {{ $reserveInfo->user->first_name.' '.$reserveInfo->user->last_name }}
                   </div>
               </div>
               <div class="flex justify-between mb-2">
                <div>
                 Phone Number
                </div>
                <div>
                 {{ $reserveInfo->user->phone }}
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Email
                </div>
                <div>
                 {{ $reserveInfo->user->email }}
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Vehicle Name
                </div>
                <div>
                 {{ $reserveInfo->vehicle->vehicleBrand['name'].' '. $reserveInfo->vehicle['name'] }}
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Pickup Date
                </div>
                <div>
                 {{ $reserveInfo->pickup_date }}
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Pickup Location
                </div>
                <div>
                 {{ $reserveInfo->pickup_location }}
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Addons
                </div>
                <div class="text-right">
                    @forelse ($addons as $addonInfo)
                       <div>{{ $addonInfo->addon->name }}</div> 
                    @empty
                        No Addon Selected
                    @endforelse
                 
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                 Total
                </div>
                <div>
                 {{ $reserveInfo->booking[0]->total }}
                </div>
            </div>
            <div class="flex gap-5 mt-5 justify-center">
                <button class="py-2 px-3 border-2 border-white w-32" wire:click="approveBooking()">Approve</button>
                <button class="py-2 px-3 border-2 border-white w-32" wire:click="denyBooking()">Deny</button>
            </div>
            </div>
        </div>
    </div>
</section>

    @endif




    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3 mb-3">
            <h3 class="text-2xl font-semibold">Reservations</h3>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Vehicle Name</th>
                            <th class="px-4 py-3">Pickup Date</th>                            
                            <th class="px-4 py-3">Dropoff Date</th>                            
                            <th class="px-4 py-3">Pickup Location</th>
                            <th class="px-4 py-3">Dropoff Location</th>
                            <th class="px-4 py-3">Customer Name</th>
                            <th class="px-4 py-3">Reserve Status</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($bookings as $booked)
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $booked->vehicle->vehicleBrand['name'].' '. $booked->vehicle['name'] }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->pickup_date }}</td>                            
                            <td class="px-4 py-3 text-sm">{{ $booked->dropoff_date }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->pickup_location }}</td>   
                            <td class="px-4 py-3 text-sm">{{ $booked->dropoff_location }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->user->first_name.' '.$booked->user->last_name }}</td>                         
                            <td class="px-4 py-3 text-sm">{{ $booked->reserve_status }}</td>                         
                            <td class="px-4 py-3 text-sm flex space-x-2">
                                <button wire:click="viewDetails({{ $booked->id }})">Details</button>

                                @if($booked->vehicle['status'] == "Unavailable")
                                <button wire:click="returnVehicle({{ $booked->vehicle_id }})">Return</button>
                                @endif
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
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
