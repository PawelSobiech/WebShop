<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="{{ asset('mycss/open-iconic-bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('mycss/animate.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/magnific-popup.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/aos.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/ionicons.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/jquery.timepicker.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/flaticon.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/icomoon.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('mycss/style.css') }}" rel="stylesheet" type="text/css" >
	
	<!--js-->
	<script type="text/javascript" src="{{ asset('myjs/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery-migrate-3.0.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery.waypoints.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery.stellar.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/aos.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/jquery.animateNumber.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/bootstrap-datepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/scrollax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/google-map.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('myjs/funkcje.js') }}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"defer></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
