<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <script src="//unpkg.com/alpinejs" defer></script>

        <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" />
        <link rel="shortcut icon" href="{{ url('img/fav.png') }}" type="image/x-icon">
        @livewireStyles
    </head>
    <body>
        <div class=" text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
