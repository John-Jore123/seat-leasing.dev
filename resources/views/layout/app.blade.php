<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    </head>
    <body class="bg-white dark:bg-firefly-900">
        
        <main class="max-h-screen scroll-smooth">
            <x-layout.navbar></x-layout.navbar>
                {{ $slot }} 
            <x-layout.footer></x-layout.footer>
        </main>   

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app-particles.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
    </body>
</html>