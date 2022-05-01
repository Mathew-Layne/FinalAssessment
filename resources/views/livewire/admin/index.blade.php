<div>
   <div>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>


    <div class="w-full flex justify-center">
        <div class="-mx-2 md:flex w-full md:w-5/6 md:justify-center">
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-gray-900 shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-100 leading-tight">Users</h4>
                            <h3 class="text-3xl text-gray-300 font-semibold leading-tight my-3">{{ $users }}</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 100%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-gray-900 shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-100 leading-tight">Vehicles</h4>
                            <h3 class="text-3xl text-gray-300 font-semibold leading-tight my-3">{{ $vehicles }}</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-gray-900 shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-100 leading-tight">Reservations</h4>
                            <h3 class="text-3xl text-gray-300 font-semibold leading-tight my-3">{{ $bookings }}</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        const chartOptions = {
    maintainAspectRatio: false,
    legend: {
        display: false,
    },
    tooltips: {
        enabled: false,
    },
    elements: {
        point: {
            radius: 0
        },
    },
    scales: {
        xAxes: [{
            gridLines: false,
            scaleLabel: false,
            ticks: {
                display: false
            }
        }],
        yAxes: [{
            gridLines: false,
            scaleLabel: false,
            ticks: {
                display: false,
                suggestedMin: 0,
                suggestedMax: 10
            }
        }]
    }
};
//
var ctx = document.getElementById('chart1').getContext('2d');
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [1, 2, 1, 3, 5, 4, 7],
        datasets: [
            {
                backgroundColor: "rgba(101, 116, 205, 0.1)",
                borderColor: "rgba(101, 116, 205, 0.8)",
                borderWidth: 2,
                data: [1, 2, 1, 3, 5, 4, 7],
            },
        ],
    },
    options: chartOptions
});
//
var ctx = document.getElementById('chart2').getContext('2d');
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [2, 3, 2, 9, 7, 7, 4],
        datasets: [
            {
                backgroundColor: "rgba(246, 109, 155, 0.1)",
                borderColor: "rgba(246, 109, 155, 0.8)",
                borderWidth: 2,
                data: [2, 3, 2, 9, 7, 7, 4],
            },
        ],
    },
    options: chartOptions
});
//
var ctx = document.getElementById('chart3').getContext('2d');
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [2, 5, 1, 3, 2, 6, 7],
        datasets: [
            {
                backgroundColor: "rgba(246, 153, 63, 0.1)",
                borderColor: "rgba(246, 153, 63, 0.8)",
                borderWidth: 2,
                data: [2, 5, 1, 3, 2, 6, 7],
            },
        ],
    },
    options: chartOptions
});
    </script>

   </div>



   <div>
    <div class="mt-10 mx-4">
        <div class="md:col-span-2 xl:col-span-3 mb-3 flex justify-between mx-3">
            <h3 class="text-2xl font-semibold">Reservations</h3>
            <a class="underline hover:text-green-600" href="{{ route('admin.reservation') }}">View Details</a>
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
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($bookingData as $booked)
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $booked->vehicle->vehicleBrand['name'].' '. $booked->vehicle['name'] }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->pickup_date }}</td>                            
                            <td class="px-4 py-3 text-sm">{{ $booked->dropoff_date }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->pickup_location }}</td>   
                            <td class="px-4 py-3 text-sm">{{ $booked->dropoff_location }}</td>
                            <td class="px-4 py-3 text-sm">{{ $booked->user->first_name.' '.$booked->user->last_name }}</td>                         
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