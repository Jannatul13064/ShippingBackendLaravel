<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title', 'DashboardTransworld') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="">
        <div class="container-fluid">

            <div class="row">
                <div class="d-flex flex-column justify-content-start col-auto bg-dark min-vh-100">
                    <div>
                        <a class="text-white text-decoration-none d-flex align-items-center p-3" role="button" href="/admin/home">
                            <span class="fs-3 fw-bold">Transworld</span>
                        </a>
                        <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                            <li class="nav-item">
                                <a class="nav-link active" href="/admin/home" aria-current="page">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Dashboard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/admin/export-lists">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Export</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/admin/import-lists">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/admin/add-bookings">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Add Booking</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/admin/booked-lists">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>All Booked</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/admin/home">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Shipments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Agents</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Port</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Clients</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Airlines</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Co-Loader</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Depo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Shipping Equipment</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item disabled">
                                <a class="nav-link text-white" data-bs-toggle="collapse" href="#menu">
                                    <i class="fa-solid fa-gauge"></i>
                                    <span>Disabled</span>
                                </a>
                            </li> --}}


                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                             @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>

                </div>
                <div class="col">

                    @yield('main-section')

                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
