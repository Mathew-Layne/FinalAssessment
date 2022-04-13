<div>
    <div class="bg-gray-100">
        <header class="w-full h-96 bg-[url('/img/homebg.jpeg')] bg-cover bg-center" style="clip-path: polygon(0 0, 100% 0%, 100% 85%, 50% 100%, 0 85%);">
            <x-navbar/>
            <div class="h-[90%] w-full bg-black bg-opacity-80 overflow-hidden flex justify-center items-center" >
               
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
                        Vehicle Name
                    </div>
                    <div class="w-full border-2 shadow p-10">
                        <img class="w-full" src="{{ url('/img/newcar3.jpg') }}" alt="">
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
    
                <div class="md:w-2/6 md:h-4/6 bg-gray-50 md:pb-10 drop-shadow-xl">
                    <div class="bg-black text-white font-bold text-center py-5">
                        $200/ per day
                    </div>
                    <div class="w-full py-10 px-10">
                        <form class="" action="">
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">PICK-UP LOCATION</label>
                                <select class="w-full my-2 bg-gray-300 border-none" name="" id="">
                                    <option value="">Select Location</option>
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">DROP-OFF LOCATION</label>
                                <select class="w-full my-2 bg-gray-300 border-none" name="" id="">
                                    <option value="">Select Location</option>
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">PICK-UP LOCATION</label>
                                <input class="w-full my-2 bg-gray-300 border-none" type="date" name="" id="">
                            </div>
    
                            <div class="mb-2">
                                <label class="font-bold text-sm text-gray-700" for="">PICK-UP LOCATION</label>
                                <input class="w-full my-2 bg-gray-300 border-none" type="date" name="" id="">
                            </div>

                            <div>
                                <h1 class="font-bold text-gray-700 underline mt-10 mb-5">
                                    RENTED ADD-ONS
                                </h1>
                            </div>

                            <div>
                                <div class="flex w-full justify-between border-b font-bold items-center mb-5">
                                    <div class="flex ">
                                        <input class="mr-2 rounded" type="checkbox" name="" id="">
                                        <h3>CAR SAET</h3>
                                    </div>
                                    <div>
                                        <h4 class="text-red-500">$25/Day</h4>
                                    </div>
                                </div>

                                <div class="flex w-full justify-between border-b font-bold items-center mb-5">
                                    <div class="flex ">
                                        <input class="mr-2 rounded" type="checkbox" name="" id="">
                                        <h3>DRIVER</h3>
                                    </div>
                                    <div>
                                        <h4 class="text-red-500">$100/Day</h4>
                                    </div>
                                </div>

                                <div class="flex w-full justify-between border-b font-bold items-center mb-5">
                                    <div class="flex ">
                                        <input class="mr-2 rounded" type="checkbox" name="" id="">
                                        <h3>WIFI ACCESS</h3>
                                    </div>
                                    <div>
                                        <h4 class="text-red-500">$15/Day</h4>
                                    </div>
                                </div>

                                <div class="flex w-full justify-between border-b font-bold items-center mb-10">
                                    <div class="flex ">
                                        <input class="mr-2 rounded" type="checkbox" name="" id="">
                                        <h3>GPS NAVIGATION</h3>
                                    </div>
                                    <div>
                                        <h4 class="text-red-500">$5/Day</h4>
                                    </div>
                                </div>

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
