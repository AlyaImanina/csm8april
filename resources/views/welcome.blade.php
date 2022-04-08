
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <body class="" >
        <div class="wrapper ">
            
            <div class="main">
                
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color: #f78f1e;">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            {{-- @if (Route::has('login')) --}}
                            <ul class="navbar-nav">
                                {{-- @auth --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="/main">
                                        <p>HOME</p>
                                    </a>
                                </li>
                            
                                 --}}
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="{{url('about')}}">
                                        <p>ABOUT</p>
                                    </a>
                                </li>
                                {{-- @else --}}
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="{{ route('login') }}">
                                        <p>LOGIN</p>
                                    </a>
                                </li>
                                {{-- @if (Route::has('register')) --}}
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="{{ route('register') }}">
                                        <p>REGISTER</p>
                                    </a>
                                {{-- </li>
                                @endif
                                @endauth --}}
                            </ul>
                        </div>
                    </div>
                </nav>
                <!--========================================================================CONTENT=========================================================================================================-->
                <div class="container"><br><br><br>
                    <div class="view" >
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="logo text-center">
                                            <br><img src="../assets/img/csm.png" style="width:40%">       
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <footer class="footer footer-black  footer-white ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="credits ml-auto">
                                    <span class="copyright">
                                        © <script>
                                            document.write(new Date().getFullYear())
                                        </script>, made with <i class="fa fa-heart heart"></i> Cyber Security Malaysia
                                    </span>
                                </div>
                            </div>
                        </div>
                    </footer> --}}
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
    </body>

</html>