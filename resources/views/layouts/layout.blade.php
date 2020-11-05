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
    </head>
    <body class="antialiased">
        @yield('navbar')

        <div class="relative min-h-screen bg-gray-100 dark:bg-dark-primary text-gray-600 dark:text-dark-primary">
            @yield('content')

            @yield('footer')
        </div>

        @stack('scrips')
    </body>
</html>
