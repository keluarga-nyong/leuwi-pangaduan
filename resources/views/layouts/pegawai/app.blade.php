<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Favicon -->
    <link href="{{ url('argon') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('argon') }}/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{ url('argon') }}/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ url('argon') }}/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    @yield('styles')

</head>

<body class="">
   
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <img src="{{ asset('user/assets/img/logo/logo.png') }}" style=" height: 70px; width:auto;" alt="Leuwi Pangaduan">

                
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item">
                        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                            href="{{ route('pegawai.home') }}">Home
                        </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                            href="{{ route('pegawai.daftar-hadir.cari') }}">Kehadiran
                        </a>
                    </li>
                    &nbsp;&nbsp;
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <i class="ni ni-single-02"></i>

                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->nama }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <a href="{{ route('pegawai.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('pegawai.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container">
                
                
                <div class="header-body">
                    <!-- Card stats -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if ($errors->any())<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
                    @yield('header')
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            @yield('content')
            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                       
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core   -->
    <script src="{{ url('argon') }}/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('argon') }}/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!--   Optional JS   -->
    @stack('scripts')

    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
        
    </script>

</body>

</html>
