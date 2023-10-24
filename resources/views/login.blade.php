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
    @vite('./resources/css/app.css')
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
                <form action="/auth/login" method="POST">
                    @csrf
                    <input type="text" name="email" id="email" class="mb-2 p-2 w-72 rounded-md" placeholder="Email address" autocomplete="off" /><br />
                    <input type="password" name="password" id="password" class="mb-2 p-2 w-64 rounded-md" placeholder="Password" autocomplete="off" /><br />
                    <button type="submit" class="text-center p-1 hover:text-light w-full bg-teal rounded-md my-2 scale-95 hover:scale-100 transition ease-in-out duration-100">Login</button>
                </form>
                <form method="post" action="{{url('captcha-validation')}}">
                    @csrf
                    <div class="form-group mt-4 mb-4">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger reload" id="reload" style="background-color: teal; color: white; padding: 8px 16px; border: none; border-radius: 5px;" onclick="location.reload();">
                                    &#x21bb; Reload
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input id="captcha" type="text" class="form-control" placeholder="Enter The Code" name="captcha">
                    </div>
                    <div class ="form-group">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Mengambil nilai yang dikirimkan oleh pengguna
                            $userEnteredCaptcha = $_POST['captcha'];

                            // Mengambil nilai captcha yang benar
                            $correctCaptcha = $_SESSION['correctCaptcha']; // Sesuaikan ini dengan cara Anda menghasilkan captcha

                            // Memeriksa apakah captcha sesuai
                            if ($userEnteredCaptcha !== $correctCaptcha) {
                                // Captcha tidak benar, tampilkan pesan kesalahan
                                echo "Kode captcha tidak valid. Silakan coba lagi.";
                            } else {
                                // Captcha benar, lanjutkan dengan proses login
                                // ...
                            }
                        }
                        ?>
                        <button type="submit" class ="bg-teal btn-block" style="background-color: teal; color: white; padding: 8px 16px; border: none; border-radius: 5px;">
                            Submit
                        </button>
                    </div>
                </form>
                <div class="flex mb-2">
                    <p class="text-dark text-sm mr-2">Don't have an account?</p>
                    <a class="text-sm text-maroon" href="/signup">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
