<div>
    <div class="bg-gray-100">
        <header class="w-full h-screen bg-[url('/img/homebg.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0%, 100% 75%, 50% 90%, 0 75%);">
            <x-navbar/>
            <div class="h-[90%] w-full bg-black bg-opacity-80 overflow-hidden flex justify-center items-center" >
               
                <div class="text-center mb-12">
                    <div>
                        <h1 class="text-white font-bold text-6xl">Jamaica's #1 Car Rental</h1>
                        <h1 class="text-white font-bold text-lg">Cheapest car rental rates island wide</h1>
                    </div>
                    <div class="mt-10">
                        <form class="md:flex" wire:submit.prevent="search()">
                            <div class="mx-2">
                                <input type="date" min="{{ date('Y-m-d') }}">
                                <label class="text-gray-200 block md:text-left text-sm mt-2" for="">PICK-UP DATE</label>
                            </div>
    
                            <div class="mx-2">
                                <input type="date" min="{{ date('Y-m-d') }}">
                                <label class="text-gray-200 block md:text-left text-sm mt-2" for="">DROP-OFF DATE</label>
                            </div>
    
                            <div class="mx-2">
                                <select wire:model="vhclSearch">
                                    <option value="">Select Vehicle Type</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                                <label class="text-gray-200 block md:text-left text-sm mt-2" for="">VEHICLE TYPE</label>
                            </div>
                            <div class="mx-2">
                               <button class="bg-red-600 text-white py-2 px-8 border-r-4 border-gray-500 font-bold">FIND IT NOW</button>
                            </div>
                        </form>
                    </div>
    
                </div>
                
    
            </div>
        </header>
        <section class="md:flex w-5/6 m-auto py-20">
            <div class="group duration-300 drop-shadow-lg md:w-4/12 w-full m-auto md:mx-5  my-8 py-20 px-10 bg-gray-50 border-b-4 border-red-600 text-center hover:bg-red-500 hover:text-white hover:border-gray-700">
                <i class="fa-light fa-gauge-circle-bolt text-7xl mb-6"></i>
                <h1 class="text-2xl font-bold mb-5">Fast & Easy Booking</h1>
                <span class="group-hover:bg-white inline-block h-1 w-10 rounded bg-red-500  mb-6"></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate soluta accusamus laborum ratione quasi, quibusdam incidunt beatae praesentium dicta reprehenderit facilis.</p>
            </div>
    
            <div class="group duration-300 drop-shadow-lg md:w-4/12 w-full m-auto md:mx-5 my-8 py-20 px-10 bg-gray-50 border-b-4 border-red-600 text-center hover:bg-red-500 hover:text-white hover:border-gray-700">
                <i class="fa-light fa-steering-wheel text-7xl mb-5"></i>
                <h1 class="text-2xl font-bold mb-5">Many Pickup Locations</h1>
                <span class="group-hover:bg-white inline-block h-1 w-10 rounded bg-red-500  mb-6"></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate soluta accusamus laborum ratione quasi, quibusdam incidunt beatae praesentium dicta reprehenderit facilis.</p>
            </div>
    
            <div class="group duration-300 drop-shadow-lg md:w-4/12 w-full m-auto md:mx-5 my-8 py-20 px-10 bg-gray-50 border-b-4 border-red-600 text-center hover:bg-red-500 hover:text-white hover:border-gray-700">
                <i class="fa-light fa-calendar-clock text-7xl mb-5"></i>
                <h1 class="text-2xl font-bold mb-5">No Booking Charges</h1>
                <span class="group-hover:bg-white inline-block h-1 w-10 rounded bg-red-500  mb-6"></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate soluta accusamus laborum ratione quasi, quibusdam incidunt beatae praesentium dicta reprehenderit facilis.</p>
            </div>
        </section>
    
        <section class="w-5/6 m-auto md:flex py-10">
            <div class="md:w-1/2 pr-10">
                <h1 class="text-3xl font-bold my-8">Choose From a Range of Cars</h1>
                <span class="inline-block h-1 w-16 rounded bg-red-500 mb-6"></span>
                <p class="mb-5 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut nesciunt error distinctio ipsa fuga vel reiciendis sit qui laborum ratione!
                </p>
                <p class="mb-5 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut nesciunt error distinctio ipsa fuga vel reiciendis sit qui laborum ratione! Ut nesciunt error distinctio ipsa fuga vel reiciendis sit qui laborum ratione!
                </p>
    
                <button class="bg-red-500 text-white py-2 px-3 hover:bg-red-700 duration-200 rounded-md">Learn More</button>
            </div>
            <div class="md:w-1/2 pl-5">
                <img src="{{ url('/img/cars1.png') }}" alt="car1">
            </div>
        </section>
        
        {{-- {{ dd($features) }} --}}
       
        <section class="bg-gray-200">
    
            <section class="w-5/6 m-auto text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="m-auto text-center mb-10">
                        <h1 class="font-bold text-4xl text-black mb-3">OUR NEW ARIVALS</h1>
                        <span class="inline-block h-1 w-40 rounded bg-red-500 mb-6"></span>
    
                    </div>
                  <div class="md:flex m-4 gap-4">
                    
                    @foreach ($features as $newCar)
                    @if ($newCar->status == "Unavailable")
                    <div class="lg:w-96 md:w-1/2 w-full mb-5 shadow-md hover:shadow-xl duration-200 hover:-translate-y-0.5 hover:translate-x-0.5 border border-gray-300">
                        <div class="block relative h-60 rounded overflow-hidden border-2">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $newCar->img }}">
                        </div>
                        <div class="text-center py-2">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $newCar->vehicleCategory->name }}</h3>
                        <h2 class="text-gray-900 title-font text-2xl font-bold">{{ $newCar->vehicleBrand->name ." ". $newCar->name }}</h2>
                        <p class="mt-1 font-semibold">${{ $newCar->price }}/day</p>
                        <button class="py-2 px-3 bg-gray-600 text-white my-2 hover:bg-gray-700">Unavailable</button>
                        </div>
                        <div class="flex w-full">
                        <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-car mr-1"></i>{{ $newCar->year }}</div>
                        <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gear mr-1"></i>{{ $newCar->transmission }}</div>
                        <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-road mr-1"></i>{{ $newCar->mileage }}</div>
                        <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gas-pump mr-1"></i>{{ $newCar->fuel }}</div>
  
                        </div>
                    </div>  
                    @else
                        
                    <div class="lg:w-96 md:w-1/2 w-full mb-5 shadow-md hover:shadow-xl duration-200 hover:-translate-y-0.5 hover:translate-x-0.5 border border-gray-300">
                      <a href="{{ route('vehicle.details', $newCar->id) }}" class="block relative h-60 rounded overflow-hidden border-2">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $newCar->img }}">
                      </a>
                      <div class="text-center py-2">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $newCar->vehicleCategory->name }}</h3>
                      <h2 class="text-gray-900 title-font text-2xl font-bold">{{ $newCar->vehicleBrand->name ." ". $newCar->name }}</h2>
                      <p class="mt-1 font-semibold">${{ $newCar->price }}/day</p>
                      <a href="{{ route('vehicle.details', $newCar->id) }}"><button class="py-2 px-3 bg-red-600 text-white my-2 hover:bg-red-700">Reserve</button></a>
                      </div>
                      <div class="flex w-full">
                      <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-car mr-1"></i>{{ $newCar->year }}</div>
                      <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gear mr-1"></i>{{ $newCar->transmission }}</div>
                      <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-road mr-1"></i>{{ $newCar->mileage }}</div>
                      <div class="w-4/12 border border-gray-300 text-center py-1"><i class="fa-solid fa-gas-pump mr-1"></i>{{ $newCar->fuel }}</div>

                      </div>
                  </div> 
                    @endif
                    
                    @endforeach
                    
                  </div>
                </div>
              </section>
        </section>
    
        <section class="h-96 bg-[url('/img/carkey.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0, 100% 90%, 90% 100%, 10% 100%, 0 90%);">
            <div class="h-full bg-black bg-opacity-80 flex justify-center items-center">
                <div class="text-center">
                    <h2 class="text-white text-3xl mb-3">Upto 35% Discounts & Special Offers</h2>
                    <h1 class="text-white text-6xl md:text-7xl mb-3 font-bold">Rent a Car for 7 Days</h1>
                    <h2 class="text-white text-xl">and get 2 days extra absolutely FREE</h2>
                </div>            
            </div>
        </section>
    
        <section class="text-gray-600 body-font m-auto w-5/6">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="{{ url('/img/newcar.jpeg') }}">
              </div>
              <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl font-bold mb-4 text-gray-900">First Step Towards Owning
                  <br class="hidden lg:inline-block">Your First Car.
                </h1>
                <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex justify-center">
                  <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Read More</button>
                </div>
              </div>
            </div>
          </section>
    
          <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-black">Customer Review</h1>
                    <span class="inline-block h-1 w-20 rounded bg-gray-800 "></span>
                </div>
                <h1></h1>
              <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-red-500 mb-8" viewBox="0 0 975.036 975.036">
                  <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
                <span class="inline-block h-1 w-10 rounded bg-red-500 mt-8 mb-6"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                <p class="text-gray-500">Senior Product Designer</p>
              </div>
            </div>
          </section>
    
          <x-footer/>
    </div>
</div>
