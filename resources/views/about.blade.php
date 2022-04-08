
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
            </div>
                <!--========================================================================CONTENT=========================================================================================================-->
                <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(../assets/img/bg1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <!-- Hero Content -->
                                <div class="hero-content text-center">
                                    <h2>Selamat Datang di Laraschool</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="regular-page-area section-padding-100 mt-5 mb-4">
                    <div class="col-lg-9 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <div class="logo text-center">
                                    <br><img src="../assets/img/csm.png" style="width:40%">       
                                </div>What is CSHCP</div>
                            <div class="card-body">
                                <p class="lead">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Program Galakan Pemerkasaan Keselamatan Siber (PGPKS) or 
                                    Cyber Security Health Check Programme (CSHCP) is a comprehensive program that implements
                                     cyber security services and solutions to combat increasingly sophisticated cyber threats 
                                     that are in accordance with current and upcoming technologies.

                                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Understanding the importance of cyber security aspects
                                     and enabling Malaysia's digital transformation agenda, CyberSecurity Malaysia (CSM) will 
                                     implement the Cyber Security Health Check Program (CSHCP) for Small and Medium Enterprises
                                      (SMEs) as part of our development project under the 12th Malaysia Plan.

                                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSHCP plays a role in assisting and supplementing the 
                                    needs of SMEs confronting cyber security challenges through cyber security health checks that 
                                    address rising cyber threats in accordance with current and future technological advances.
                                     It is critical for laying a solid foundation for SME cyber security infrastructures and will 
                                     enable the opportunity to mitigate any potential hazards.
                                    
                                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For this, MSCMS would want to provide CyberSecurity 
                                    Malaysia with a subscription to the Workspace Tools for Cyber Security Health Check Program 
                                    (CSHCP). CSM can use these Workspace Tools to administer the program and acquire a summary or 
                                    even a thorough picture of the operations' status.
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                  
                    <footer class="footer footer-black  footer-white ">
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
                    </footer>
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