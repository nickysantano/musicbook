<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MUSICBOOK</title>

    <!-- Scripts -->
    <script src="{{url('assets/js/components/bootstrap.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Aldrich') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <style>.btnSubmit{
                background-color: #7583e2;
                padding: 10px;
                border-radius: 12px;
                border: none;
                color: white;
                margin-left: 90%;
            }
            .footer-dark{
                margin-top: 50px;
            }
            .navbar{
                background-color: #1a202c;
            }
    </style>
</head>
<body>
<div id="app">

    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                MUSICBOOK
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Music <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">Producer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <div>
            <div id="heading"><img id="heading_icon" src="{{ asset('assets/img/icon.png') }}">
                <p id="heading_description" style="font-size: 24px;font-family: Aldrich, sans-serif;">Your Daily Music Needs</p>
            </div>
        </div>

        <div id="contents">
            @yield('content')
        </div>

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 item text">
                            <h3>MUSIC BOOK</h3>
                            <p><br>We are a music company that gives you all the trending music information to fulfill your music routines needs.<br><br></p>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>CONTACT US</h3>
                            <ul>
                                <li></li>
                                <li><a href="#">musicbook@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col item social">
                            <a href="https://web.facebook.com/nickysantano/"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://twitter.com/NickySantano"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.instagram.com/nickysantano"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                    <p class="copyright">Nicky Santano © 2020</p>
                </div>
            </footer>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </main>
</div>
</body>
</html>
