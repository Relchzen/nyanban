<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nyanban</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="md:flex min-h-screen relative">
            <x-sidebar />
            @yield('content')
        </div>

    </body>
    </html>
