<div>   
   
    @if($profileAlert)       
        <div class="flex w-full max-w-sm absolute bottom-5 right-2 z-20 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                </svg>
            </div>
                    
            <div class="px-4 py-2 -mx-3 flex">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">Profile Successfully Updated!</p>
                </div>
                <i wire:click="$set('profileAlert', false)" class="fas fa-times text-lg cursor-pointer absolute right-5 top-6"></i>
            </div>
        </div>

    @endif

        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Profile
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    
    
                    <form wire:submit.prevent="updateProfile()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Profile Details
                        </h6>
    
                        <div class="flex flex-wrap">
    
                            <div class="flex flex-wrap">

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            First Name
                                        </label>
                                        <input type="text" placeholder="Enter First Name"
                                            class="border-0 px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="profile.fname">
                                        @error("profile.fname")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Last Name
                                        </label>
                                        <input type="text" placeholder="Enter Last Name"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="profile.lname">
                                        @error("profile.lname")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>                               

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Email
                                        </label>
                                        <input
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            disabled
                                            wire:model="profile.email" placeholder="Enter Email">
                                        @error("profile.email")<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
    
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Phone Number
                                        </label>
                                        <input type="number" placeholder="Enter Phone Number"
                                            class="border-0  px-3 text-black py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="profile.phone">
                                        @error("profile.phone")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                            Password
                                        </label>
                                        <input type="password" placeholder="Enter Last Name"
                                            class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            autocomplete="off"
                                            wire:model="profile.password">
                                    </div>
                                </div>                                                              
    
                                <div class="ml-3 mt-3 ">
                                    <button type="submit">Update Profile</button>
                                </div>
    
                            </div>
                    </form>
                </div>
            </div>
        </div>
    
    
</div>
