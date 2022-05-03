<div>
    @if($roleForm)
    <section
    class="absolute left-0 top-0 flex h-screen justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
    <div class="w-full lg:w-4/12 px-4 mt-6">
        <div
            class="flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
            <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Update Role
                    </h6>
                    <i wire:click="$set('roleForm', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                <form wire:submit.prevent="changeRole()">
        
                    <div class="flex flex-wrap">

                        <div class="flex flex-wrap w-full">                           

                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Roles
                                    </label>
                                    <select wire:model="role"
                                        class="border-0 px-3 py-3 text-black placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                    @error("role")<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="ml-3 mt-3 ">
                                <button>Update</button>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endif

    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3 mb-3">
            <h3 class="text-2xl font-semibold">User List</h3>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">First Name</th>
                            <th class="px-4 py-3">Last Name</th>
                            <th class="px-4 py-3">Phone Number</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">User Type</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($users as $user)
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $user->first_name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->last_name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->phone }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->email }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->user_type }}</td>                            
                            <td class="px-4 py-3 text-sm flex space-x-2">
                                <button wire:click="getId({{ $user->id }})">Edit</button>
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
