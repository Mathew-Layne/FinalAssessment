<div class="md:bg-black md:bg-opacity-80 text-white bg-gray-800">
    <nav class="md:flex justify-between py-5 mx-5">       
        <div class="font-bold text-xl">
            <a href="{{ url('/') }}">Logo</a> 
        </div>
        <div>
            <ul class="md:flex">
                <a class="px-4 font-bold text-md" href="{{ url('/') }}"><li>Home</li></a>
                <a class="px-4 font-bold text-md" href="{{ route('vehicles') }}"><li>Vehicles</li></a>
                <a class="px-4 font-bold text-md" href="{{ route('service') }}"><li>Services</li></a>
                <a class="px-4 font-bold text-md" href="{{ route('about') }}"><li>About</li></a>
                <a class="px-4 font-bold text-md" href="{{ route('contact') }}"><li>Contact</li></a>
            </ul>
        </div>
        <div class="md:flex">
            @if(Auth::check())
            <h1 class="px-3 font-bold text-md"><a href="{{ route('dashboard') }}">Dashboard</a></h1>
            
            @else
            <h1 class="px-3 font-bold text-md"><a href="{{ route('register') }}">Register</a></h1>
            <h1 class="pl-4 font-bold text-md"><a href="{{ route('login') }}">Login</a></h1>
            @endif
        </div>
        
    </nav> 
 </div>