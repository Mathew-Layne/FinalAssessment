<div>
    <div class="bg-gray-100">
        <header class="w-full h-96 bg-[url('/img/homebg.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0%, 100% 85%, 50% 100%, 0 85%);">
            <x-navbar/>
            <div class="h-[90%] w-full bg-black bg-opacity-80 overflow-hidden flex justify-center items-center" >
               
                <div class="text-center mb-12">
                    <div>
                        <h1 class="text-white font-bold text-6xl">Vehicle Listing</h1>
                    </div>               
    
                </div>
            </div>
        </header>
        
        <section class="">
                <section class="w-5/6 m-auto text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="m-auto text-center mb-10">
                            <h1 class="font-bold text-4xl text-black mb-3">CHECK OUT OUR FLEET</h1>
                            <span class="inline-block h-1 w-20 rounded bg-red-500 mb-6"></span>
        
                        </div>
                      <div class="md:flex gap-5 m-4 md:flex-wrap">

                        @foreach ($vehicleList as $list)
                            <div class="lg:w-96 md:w-1/2 w-full mb-5 shadow-md hover:shadow-xl duration-200 hover:-translate-y-0.5 hover:translate-x-0.5 border border-gray-300">
                                <a href="{{ route('vehicle.details', $list->id) }}" class="block relative h-60 rounded overflow-hidden border-2">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $list->img }}">
                                </a>
                                <div class="text-center py-2">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $list->vehicleCategory->name }}</h3>
                                <h2 class="text-gray-900 title-font text-2xl font-bold">{{ $list->vehicleBrand->name ." ". $list->name }}</h2>
                                <p class="mt-1 font-semibold">${{ $list->price }}/day</p>
                                <a href="{{ route('vehicle.details', $list->id) }}"><button class="py-2 px-3 bg-red-600 text-white my-2 hover:bg-red-700">Reserve</button></a>
                                </div>
                                <div class="flex w-full">
                                <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-car mr-1"></i>{{ $list->year }}</div>
                                <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gear mr-1"></i>{{ $list->transmission }}</div>
                                <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-road mr-1"></i>{{ $list->mileage }}</div>
                                <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gauge-max mr-1"></i>{{ $list->fuel }}</div>
        
                                </div>
                            </div> 
                        @endforeach
                     
                      </div>
                    </div>
                  </section>
        </section>
    
          <x-footer/>
    </div>
</div>
