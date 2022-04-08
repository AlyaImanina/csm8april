<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        {{-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/cir.png">
        <link rel="icon" type="image/png" href="../assets/img/cir.png"> --}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            CSM
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="">
        <div class="wrapper">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="card example-1 square scrollbar-dusty-grass square thin">
                        <div class="logo">
                            <img src="../assets/img/logo.png">
                        </div>
                        <div class="sidebar-wrapper" id="sidebar-wrapper">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ __('index') }}">
                                        <i class="now-ui-icons design_app"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pageSubmenu" data-toggle="collapse" class="dropdown-toggle">Registration</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu">
                                        <li><a href="{{ __('reglistmp') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Auth Partner Company</a></li>
                                        <li><a href="{{ __('reglistsme') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SME Company</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ __('index') }}">
                                        <i class="now-ui-icons design_app"></i>
                                        <p>Preliminary Assessment</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ __('index') }}">
                                        <i class="now-ui-icons design_app"></i>
                                        <p>SME Information</p>
                                    </a>
                                </li>                        
                                <li>
                                    <a href="./map.html">
                                        <i class="now-ui-icons location_map-big"></i>
                                        <p>Auth Partner Information</p>
                                    </a>
                                </li>                        
                                <li>
                                    <a href="{{ __('pgpks') }}">
                                        <i class="now-ui-icons ui-1_bell-53"></i>
                                        <p>PGPKS Programme</p>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="#pageSubmenu" data-toggle="collapse" class="dropdown-toggle">PGPKS Programme</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu">
                                        <li><a href="{{ __('reglistmp') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upcoming Event</a></li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="/book">
                                        <i class="now-ui-icons ui-1_bell-53"></i>
                                        <p>Reports</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            <div class="main-panel" id="main-panel">
                <!-- Navbar ------------------------------------------------------------------------------------------------->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color: #f78f1e;">
                    <div class="container-fluid">
                        {{-- <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;">Dashboard</a>
                        </div> --}}
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="javascript:;">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Account</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <p>{{ Auth::user()->name }}</p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        @guest
                                            @if (Route::has('profile'))
                                                <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                                            @endif
                                        @else
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }} 
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @endguest
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!--==============================================================CONTENT=============================================================================================-->
                    @yield('content')
                    <!--============================================================== FOOTER ================================================================================= -->
                    <footer class="footer footer-black  footer-white ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="credits ml-auto">
                                    <span class="copyright">
                                        © <script> document.write(new Date().getFullYear())</script>,
                                         made with <i class="fa fa-heart heart"></i> Cyber Security Malaysia
                                    </span>
                                </div>
                            </div>
                        </div>
                    </footer>                
            </div>
        </div>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!-- Chart JS -->
            <script src="../assets/js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="../assets/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
            <script src="../assets/demo/demo.js"></script>
            <script>
                $(document).ready(function () {
                    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                    demo.initChartsPages();
                });
            </script>
    </body>
     </html>