<x-guest-layout>


    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
          <img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
        </div>
      
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">
      
          <div class="w-full h-100">
      
      
            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Register Now</h1>
      
            <form class="mt-6" action="{{ route('register') }}" method="POST">
                @csrf

            
              <div class="flex gap-3">
                  <div class="w-1/2">
                    <label class="block text-gray-700">First Name</label>
                    <input type="text" name="fname" :value="old('fname')" placeholder="Enter First Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
                  </div>
                

                <div class="w-1/2">
                    <label class="block text-gray-700">Last Name</label>
                    <input type="text" name="lname" :value="old('lname')" autocomplete placeholder="Enter Last Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
                  </div>
              </div>
      
              <div class="mt-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" :value="old('email')" autocomplete placeholder="Enter Email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" autocomplete="current-password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" autocomplete="new-password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
              </div>             
      
              <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Register</button>
            </form>           
      
            <p class="mt-8">Already Registered? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Login</a></p>
      
      
          </div>
        </div>
      
      </section>









    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
