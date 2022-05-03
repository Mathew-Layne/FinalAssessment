<div>
    <div>
        <div class="mt-10 mx-4">
            <div class="md:col-span-2 xl:col-span-3 mb-3 mx-3">
                <h3 class="text-2xl font-semibold">Reservations</h3>                
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">                
    
                {{-- {{ dd($bookingData[0]->booking[0]->total) }} --}}
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
                                <th class="px-4 py-3">Total</th>
                                <th class="px-4 py-3">Reserve Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach($bookingData as $booked)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">CR00{{ $booked->id}}</td>                            
                                <td class="px-4 py-3 text-sm">{{ $booked->vehicle->vehicleBrand['name'].' '. $booked->vehicle['name'] }}</td>
                                <td class="px-4 py-3 text-sm">{{ $booked->pickup_date }}</td>                            
                                <td class="px-4 py-3 text-sm">{{ $booked->dropoff_date }}</td>
                                <td class="px-4 py-3 text-sm">{{ $booked->pickup_location }}</td>   
                                <td class="px-4 py-3 text-sm">{{ $booked->dropoff_location }}</td>
                                <td class="px-4 py-3 text-sm">${{ $booked->booking[0]->total }}</td>
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
