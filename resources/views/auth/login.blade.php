
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/cir.png">
  <link rel="icon" type="image/png" href="../assets/img/cir.png">
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

<body class="d-flex flex-column min-vh-100">
  <div class="wrapper ">  
      <br><br><br>
         
    <div class="main flex-fill">
      <div class="logo text-center">
        <img src="../assets/img/csm.png" style="width:20%">       
      </div><br><br>

      <div class="regular-page-area section-padding-100 mt-5 mb-4">
        <div class="col-md-4 mx-auto">
            <div class="card shadow">
                <div class="card-header" style="background-color: #f78f1e;">
                  <h5 class="card-title text-center">Login</h5>
                </div>
                <div class="card-body">
                  <form method="POST" class="my-login-validation" novalidate="" action="{{route('login')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" id="email" type="email" name="email" value="" required autofocus
                          placeholder="Enter email">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                      </div>                    
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" id="password" name="password" required data-eye
                          placeholder="Enter password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                      </div>                   
                    </div>
                    <div class="row">
                      <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-default btn-round">Login</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="update ml-auto mr-auto">
                        <div class="mt-4 text-center">
                          Don't have a account ?<a href="{{route('register')}}">Create one</a>
                        </div>
                        
                       
                      </div>
                    </div>
                  </form>                  
                </div>
                <div class="card-footer" style="background-color: #f78f1e;"></div>
            </div>
        </div>
    </div>
    </div>

      <footer class="footer footer-black footer-white ">
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

{{-- <body class="d-flex flex-column min-vh-100">
  <div class="wrapper ">  
      <br><br><br>
         
    <div class="main flex-fill">
      <div class="logo text-center">
        <img src="../assets/img/csm.png" style="width:20%">       
      </div><br><br>
      <div class="content">
        <div class="row justify-content-md-center">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-header" style="background-color: #f78f1e;">
                <h5 class="card-title text-center">Login</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control">
                      </div>
                    </div>                   
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-default btn-round">Login</button>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <div class="mt-4 text-center">
                        Don't have a account ?<a href="{{route('register')}}">Create one</a>
                      </div>
                      
                     
                    </div>
                  </div>

                </form>
              </div>
              <div class="card-footer" style="background-color: #f78f1e;"></div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black footer-white ">
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
</body> --}}

</html>