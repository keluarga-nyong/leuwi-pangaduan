<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Bootstrap Business Template">
    <meta name="author" content="The Develovers">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Leuwi Pangaduan</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('user/assets/js/jquery-2.1.1.min.js') }}" defer></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('user/assets/js/plugins/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('user/assets/js/plugins/stellar/jquery.stellar.min.js') }}" defer></script>
    <script src="{{ asset('user/assets/js/repute-scripts.js') }}" defer></script>

    <!-- Fonts -->
    @include('layouts.user.font')

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('user/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/my-custom-styles.css') }}" rel="stylesheet">
    
</head>
<body>
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- NAVBAR -->
        
        @include('layouts.user.navbar')
    
        @include('layouts.user.slider')

        <main class="py-4">
            @yield('content')
        </main>
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- COLUMN 1 -->
                        <h3 class="sr-only">ABOUT US</h3>
                        <img src="{{ asset('user/assets/img/logo/logo.png') }}" class="logo" alt="Repute">
                        <p class="justify">Leuwi Pangaduan merupakan salah satu objek wisata alam terbaru di Bogor tepatnya berada di daerah Bojong Koneng, Babakan Madang. Terletak di tengah hutan yang asri dan teduh, tentunya memiliki suasana yang asri nan meneduhkan.</p>
                        <br>
                        <address class="margin-bottom-30px">
                            <ul class="list-unstyled">
                                <li>Bogor, Jawa Barat</li>
                                <li>Phone: (0251) 765 - 4321</li>
                                <li>Email: leuwipangaduan@gmail.com</li>
                            </ul>
                        </address>
                        <!-- END COLUMN 1 -->
                    </div>
                    <div class="col-md-4">
                        <!-- COLUMN 2 -->
                        <h3 class="footer-heading">USEFUL LINKS</h3>
                        <div class="row margin-bottom-30px">
                            <div class="col-xs-6">
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="/galeri">Galeri</a></li>
                                    <li><a href="/price">Price</a></li>
                                    <li><a href="/event">Event</a></li>
                                    <li><a href="/pegawai/login">Pegawai</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="/">Home</a></li>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="/booking">Booking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/tiket">Pesan Tiket</a>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                        <!-- END COLUMN 2 -->
                    </div>
                    <div class="col-md-4">
                        <!-- COLUMN 3 -->
                        <div class="newsletter">
                            <h3 class="footer-heading">NEWSLETTER</h3>
                            <p>Get the latest update from us by subscribing to our newsletter.</p>
                            <form class="newsletter-form" method="POST">
                                <div class="input-group input-group-lg">
                                    <input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="button">SUBSCRIBE</button></span>
                                </div>
                                <div class="alert"></div>
                            </form>
                        </div>
                        <div class="social-connect">
                            <h3 class="footer-heading">GET CONNECTED</h3>
                            <ul class="list-inline social-icons">
                                <li><a href="https://www.instagram.com/leuwipangaduan/" class="facebook-bg"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- END COLUMN 3 -->
                    </div>
                </div>
            </div>
            <!-- COPYRIGHT -->
            <div class="text-center copyright">
                &copy;2021 Leuwi Pangaduan
            </div>
            <!-- END COPYRIGHT -->
        </footer>
        <!-- END FOOTER -->
    </div>
    <!-- END WRAPPER -->
</body>
</html>
