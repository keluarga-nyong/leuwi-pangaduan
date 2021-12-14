<nav class="navbar navbar-default " role="navigation">
            <div class="container">
                <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="index.html" class="navbar-brand navbar-logo">
                        <img src="user/assets/img/logo/logo.png" style="height: 65px; width:auto;" alt="Leuwi Pangaduan">
                    </a>
                </div> -->
                <!-- MAIN NAVIGATION -->
                
                <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="/" class="navbar-logo" style="padding 4px;" >
                            <img src="{{ asset('user/assets/img/logo/logo.png') }}" style=" height: 55px; width:auto;" alt="Leuwi Pangaduan">
                        </a>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                                @guest
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;">
                                    <img src="{{ asset('user/assets/img/3-dots.png') }}" style="height: 10px; width:auto;">
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('price') }}">PRICE</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('event') }}">EVENT</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('galeri') }}">GALERI</a>
                                    </li>
                                    @if (Route::has('user.login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user.login') }}">{{ __('LOGIN') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('user.register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user.register') }}">{{ __('REGISTER') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;">
                                            <i class="fa fa-user"></i>
                                            {{ Auth::guard('web')->user()->name }}
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a class="nav-link" href="{{ route('home') }}">HOME</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('price') }}">PRICE</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('event') }}">EVENT</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('galeri') }}">GALERI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/user/booking">BOOKING</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/user/tiket">PESAN TIKET</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('user.logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('LOGOUT') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('user.logout') }}" method="post" class="d-none">
                                                    @csrf
                                                </form> 
                                            </li>
                                        </ul>
                                    </li>
                                    @endguest
                                </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- END MAIN NAVIGATION -->
            </div>
        </nav>
        <!-- END NAVBAR -->