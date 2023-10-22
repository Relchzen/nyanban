<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nyanban - Sign Up</title>

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
                <div class="bg-jade p-4 rounded-sm">
                    <p class="text-dark text-xl mb-2">Sign Up</p>
                    <form action="/signup" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" name="first_name" id="first_name" class="mb-3 p-2 w-36 rounded-md" placeholder="First Name" autocomplete="off" required />
                            <input type="text" name="last_name" id="last_name" class="mb-3 p-2 w-36 rounded-md" placeholder="Last Name" autocomplete="off" required />
                        </div>
                        <div>
                            <input type="date" name="birthdate" id="birthdate" class="mb-3 p-2 w-74 rounded-md" required />
                        </div>
                        <div class="grid grid-cols-2 mb-3">
                            <div class="grid justify-center">
                                <div>
                                    <input type="radio" name="gender" id="gender1" value="male" 
                                    class="hover:cursor-pointer" required>
                                    <label for="gender1" class="hover:cursor-pointer">Male</label>
                                </div>
                            </div>
                            <div class="grid justify-center">
                                <div>
                                    <input type="radio" name="gender" id="gender2" value="female" 
                                    class="hover:cursor-pointer" required>
                                    <label for="gender2" class="hover:cursor-pointer">Female</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid">
                            <input type="text" name="username" id="username" class="mb-3 p-2 w-74 rounded-md" placeholder="Username" autocomplete="off" required/>
                            <input type="text" name="email" id="email" class="mb-3 p-2 w-74 rounded-md" placeholder="Email address" autocomplete="off" required />
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="password" name="password" id="password" class="mb-3 p-2 w-36 rounded-md" placeholder="Password" autocomplete="off" required />
                            <input type="password" name="password_confirmation" id="confirm-password" class="mb-3 p-2 w-36 rounded-md" placeholder="Confirm Password" autocomplete="off" required />
                        </div>
                        
                        <button type="submit" class="text-center p-1 hover:text-light w-full bg-teal rounded-md my-2 scale-95 hover:scale-100 transition ease-in-out duration-100">Sign Up</button>
                    </form>
                    <div class="flex mb-2">
                        <p class="text-dark text-sm mr-2">Already have an account?</p>
                        <a class="text-sm text-maroon" href="/login">Login</a>
                    </div>
                </div>
            </div>            
        </div>

    </body>
</html>
