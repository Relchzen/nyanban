<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nyanban - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;600&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <!-- Styles -->
    </head>
    <body class="antialiased bg-cream font-comfortaa">
       <div class="container mx-auto">
           <div class="grid h-screen content-start justify-items-center py-16 md:content-center">
                <div class="w-min">
                    <x-logo />
                </div>
                <br><br>
                <div class="md:mb-48 bg-jade p-4 rounded-sm">
                    <p class="text-dark text-xl mb-2">Login</p>
                    <form action="" method="POST">
                        <input type="text" name="email" id="email" class="mb-2 p-2 w-72 rounded-md" placeholder="Email address" />
                        <br />
                        <input type="password" name="password" id="password" class="mb-2 p-2 w-64 rounded-md" placeholder="Password" />
                        <br />
                        <button type="submit" class="text-center p-1 hover:text-light w-full bg-teal rounded-md my-2 scale-95 hover:scale-100 transition ease-in-out duration-100">Login</button>
                    </form>
                    <div class="flex mb-2">
                        <p class="text-dark text-sm mr-2">Don't have an account?</p>
                        <a class="text-sm text-maroon" href="/register">Register</a>
                    </div>
                </div>
            </div>            
        </div>

    </body>
</html>
