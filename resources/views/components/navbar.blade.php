{{-- <div class="md:bg-black md:bg-opacity-80 text-white bg-gray-800"> --}}
    {{-- <nav class="md:flex justify-between py-5 mx-5">       
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
        
    </nav>  --}}

    <nav class="top-0 absolute bg-opacity-90 text-white z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">

        <div class="container relative px-4 mx-auto z-50 flex flex-wrap items-center ">
            <div class="w-full relative  flex justify-between lg:w-auto lg:static lg:block lg:justify-start"> <a
                    class="text-sm font-bold leading-relaxed inline-block mr-4 py-1 whitespace-nowrap uppercase text-white"
                href="{{ url('/') }}">Logo</a><button
                    class= "cursor-pointer text-x l leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')"> <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white z-50 lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
    
                    <li class="flex items-center"> <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ url('/') }}">Home</a> </li>
                    <li class="flex items-center"> <a
                            class=" lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('vehicles') }}"><span class="inline-block ml-2">Vehicles</span></a> </li>
                    <li class="flex items-center"> <a
                            class=" lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('service') }}"><span class="inline-block ml-2">Services</span></a>
                    </li>
                    <li class="flex items-center"> <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('about') }}"><span class="inline-block ml-2">About</span></a> </li>
                    <li class="flex items-center"> <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('contact') }}"><span class="inline-block ml-2">Contact Us</span></a> </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    @if(Auth::check())
    
                    <li class="flex items-center"> <a
                            class=" lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('dashboard') }}"><span class="inline-block ml-2">Dashboard</span></a> </li>
    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="flex items-center"><button
                                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                type="submit" style="transition: all 0.15s ease 0s;"> <i
                                    class="fas fa-arrow-alt-circle-right"></i> Logout </button> </li>
                    </form>
                    @else
                    <li class="flex items-center"> <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('register') }}"><span class="inline-block ml-2">Register</span></a> </li>
    
                    <li class="flex items-center"><a href="{{ route('login') }}"> <button
                                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                type="button" style="transition: all 0.15s ease 0s;"> <i
                                    class="fas fa-arrow-alt-circle-right"></i>Login
                            </button></a> </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function toggleNavbar(e){document.getElementById(e).classList.toggle("hidden"),document.getElementById(e).classList.toggle("block")}
    </script>
 {{-- </div> --}}