<div>   
     @if($deleteAlert)       
        <div class="flex w-full max-w-sm absolute bottom-5 right-2 z-20 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-red-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                </svg>
            </div>
                    
            <div class="px-4 py-2 -mx-3 flex">
                <div class="mx-3">
                    <span class="font-semibold text-red-500 dark:text-red-400">Success</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">Addon Successfully Deleted!</p>
                </div>
                <i wire:click="$set('deleteAlert', false)" class="fas fa-times text-lg cursor-pointer absolute right-5 top-6"></i>
            </div>
        </div>

    @endif
    
    
        @if($addonForm)
                    
            <section 
                class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
                <div class="w-full lg:w-4/12 px-4 mt-6">
                    <div
                        class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                        <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Addon
                                </h6>
                                <i wire:click="$set('addonForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                            </div>
                        </div>           
    
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            {{-- {{ dd($clientlist) }} --}}
    
                            <form wire:submit.prevent="addAddon()">
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Addon Details
                                </h6>
    
                                <div class="flex flex-wrap">
    
                                    <div class="flex flex-wrap w-full">                           
    
                                        <div class="w-full px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Name
                                                </label>
                                                <input
                                                    class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    wire:model="addon.name" placeholder="Enter Addon Name">
                                                @error("addon.name")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
    
                                        <div class="w-full px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Price
                                                </label>
                                                <input
                                                    class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    wire:model="addon.price" placeholder="Enter Addon Price">
                                                @error("addon.price")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
    
                                        <div class="ml-3 mt-3 ">
                                            <button>Add Addon</button>
                                        </div>
    
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            @endif
    
        @if($updateAddonForm)
                    
            <section
                class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
                <div class="w-full lg:w-4/12 px-4 mt-6">
                    <div
                        class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                        <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Addon
                                </h6>
                                <i wire:click="$set('updateAddonForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                            </div>
                        </div>           
    
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            {{-- {{ dd($clientlist) }} --}}
    
                            <form wire:submit.prevent="updateAddon()">
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Addon Details
                                </h6>
    
                                <div class="flex flex-wrap">
    
                                    <div class="flex flex-wrap w-full">                           
    
                                        <div class="w-full px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Name
                                                </label>
                                                <input
                                                    class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    wire:model="addon.name" placeholder="Enter Addon Name">
                                                @error("addon.name")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
    
                                        <div class="w-full px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Price
                                                </label>
                                                <input
                                                    class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    wire:model="addon.price" placeholder="Enter Addon Price">
                                                @error("addon.price")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
    
                                        <div class="ml-3 mt-3 ">
                                            <button>Update Addon</button>
                                        </div>
    
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            @endif
    
    
                <div class="mt-4 mx-4">
                    <div class="md:col-span-2 xl:col-span-3">
                        <h3 class="text-2xl font-semibold">Add-on Listing</h3>
                    </div>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">   
                        
                        <div class="mb-1 mt-5">
                            <span wire:click="$toggle('addonForm')" class=" mx-2 cursor-pointer hover:underline">Add Addon</span>
                        </div>
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Addon Name</th>
                                        <th class="px-4 py-3">Addon Price</th>                            
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach($addons as $addon)
                                    <tr
                                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm">{{ $addon->name }}</td>
                                        <td class="px-4 py-3 text-sm">${{ $addon->price }}</td>                                                       
                                        <td class="px-4 py-3 text-sm flex space-x-2">
                                            <button class="hover:text-green-500" wire:click="getId({{ $addon->id }})">Update</button>
                                            <button class="hover:text-red-500" wire:click="deleteAddon({{ $addon->id }})">Delete
                                            </button>
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
                                {{-- {{ $appointments->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
  
</div>
