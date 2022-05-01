<div>
    <div>
        <div class="mt-10 mx-4">
            <div class="md:col-span-2 xl:col-span-3 mb-3 mx-3">
                <h3 class="text-2xl font-semibold">Reservations</h3>                
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
    
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Reservation ID</th>
                                <th class="px-4 py-3">Vehicle Name</th>
                                <th class="px-4 py-3">Pickup Date</th>                            
                                <th class="px-4 py-3">Dropoff Date</th>                            
                                <th class="px-4 py-3">Pickup Location</th>
                                <th class="px-4 py-3">Dropoff Location</th>
                                <th class="px-4 py-3">Reserve Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach($bookingData as $booked)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">CR0000{{ $booked->id}}</td>                            
                                <td class="px-4 py-3 text-sm">{{ $booked->vehicle->vehicleBrand['name'].' '. $booked->vehicle['name'] }}</td>
                                <td class="px-4 py-3 text-sm">{{ $booked->pickup_date }}</td>                            
                                <td class="px-4 py-3 text-sm">{{ $booked->dropoff_date }}</td>
                                <td class="px-4 py-3 text-sm">{{ $booked->pickup_location }}</td>   
                                <td class="px-4 py-3 text-sm">{{ $booked->dropoff_location }}</td>
                                <td class="px-4 py-3 text-sm">{{ $booked->reserve_status }}</td>                         
                                
                            </tr>
                            @endforeach
    
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                    <div class="">
                        {{-- {{ $appointments->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
       </div>
</div>
