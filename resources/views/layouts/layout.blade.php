<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        @stack('styles')
        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
        @livewireStyles
    </head>
    <body class="antialiased min-h-screen bg-light-secondary dark:bg-dark-primary text-light-primary dark:text-dark-primary">
        @yield('navbar')

        <main>
            @yield('content')
        </main>
        @yield('footer')

        @stack('scripts')
        @livewireScripts
    </body>
</html>
