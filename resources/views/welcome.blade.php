<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                        <div class="">
                            <a class="navbar-brand" href="/">Transworld</a>
                        </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"   aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (Route::has('login'))
                        <div class="collapse navbar-collapse  d-flex justify-content-end gap-2 p-2" id="navbarSupportedContent">
                            @auth
                                   <div>
                                        <a href="{{ url('/home') }}" class="text-decoration-none text-white nav-link">Home</a>
                                   </div>
                            @else
                               <div>
                                    <a href="{{ route('login') }}" class="text-decoration-none text-white  nav-link">Log in</a>
                               </div>

                                @if (Route::has('register'))
                                    <div>
                                        <a href="{{ route('register') }}" class="text-decoration-none text-white  nav-link">Register</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
            </div>

        </nav>


        {{-- script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
