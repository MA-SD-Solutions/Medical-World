<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    <link rel="stylesheet" href="{{asset('asset/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('links')
</head>

<body class="">

<link  rel="stylesheet" href="{{asset('asset/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/dist/css/style.css')}}">

<!--navbar-->
<nav class="navbar navbar-expand-sm nav-color">
    <div class="container sm-nav">
        <a class="navbar-brand" href="#"><img src="{{asset('asset/dist/img/Logo.png')}}" class="nav-logo mt-md-4" width="250" height="55" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-center sm-p " id="navbarNavDropdown">
            <div class="justify-content-center flex-column w-100  ms-md-4 me-md-4">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active-link" aria-current="page" href="{{route('system.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.about_us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.service')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.doctor')}}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.offers')}}">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('system.ContactUs')}}">Contact</a>
                    </li>
                </ul>
                <form role="search">
                    <input class="form-control w-100" type="search" placeholder="Search For Service" aria-label="Search" id="searchInput">
                </form>
            </div>
        </div>

        <button class="btn secondary-button mt-md-5 mb-md-2 me-md-4" type="button">Book Now</button>
        <a class="navbar-brand mt-md-5 mb-md-2" href="{{route('system.cart')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart nav-icon" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div class="dot">
              <p class="text-center fs-6" id="counter"></p>
            </div>
          </a>
        <a class="navbar-brand mt-md-5 mb-md-2" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person nav-icon" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
          </svg>
        </a>
    </div>
</nav>

<!--bottom header-->
<div class="bottom-header text-white fs-7 fw-lighter nav-color text-center pt-1">
    <p class="pb-1 mb-0">Teeth cleaning | Tooth extractions | Wisdom tooth removal | Aging skin | Birth marks | Hair transplant | Laser surgery | Rhinophyma | Folliculitis | Lupus</p>
</div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <div class="row" style="display: block;">
            @if (session()->has('success'))
            <script>
            Swal.fire({
                title: 'Success!',
                text: 'Form Saved Successfully.',
                icon: 'success',
                confirmButtonText: 'Ok'
              })
            </script>
                {{-- <div class=" alert-success">
                    <ul>
                        <h5>{{ session()->get('success') }}</h5>
                    </ul>
                </div> --}}
            @endif
            @if (session()->has('error'))
            {{-- <div class="alert alert-danger">
                <ul>
                    <h5>{{ session()->get('error') }}</h5>
                </ul>
            </div> --}}
            <script>
                 Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session()->get('error') }}',
              })
            </script>

        @endif
            @if($errors->all())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    @yield('content')

       <!-- Footer -->
       <footer class="text-center text-lg-start text-muted nav-color pt-2 ">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 px-0 d-flex align-items-md-start align-items-sm-center justify-content-center flex-column">
                        <!-- Content -->
                        <img src="{{asset('asset/dist/img/Logo.png')}}" class="mx-auto" width="250" height="75" alt="">
                        <p class="fs-7 mt-2 ">
                            We Are Always Ensure Best Medical Treatment For Your Health.
                        </p>
                        <div class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter mx-2" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram mx-3" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook mx-3" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>

                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase mb-4 text-white">
                            For Patient
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Dentist</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Emergency</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Pharmacy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Consultation</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Clinic</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase mb-4 text-white">
                            Solution
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Tips and Trick</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Food Health</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Blog</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3  mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fs-6 mb-4 text-white">Our Company</h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">specialty</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Term and Privacy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Contact US</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://sdsolutionseg.com/">SD Solutions</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    {{-- <div class="wrapper"> --}}
        <!-- Navbar -->

        <!-- /.navbar -->


        <!-- Content Wrapper. Contains page content -->
        {{-- <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <!-- /.col -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div> --}}
            <!-- /.content-header -->
 <!--navbar-->
 {{-- <nav class="navbar navbar-expand-sm nav-color">
    <div class="container sm-nav">
      <a class="navbar-brand" href="#"><img src="images/Logo.png" class="nav-logo mt-md-4" width="250" height="55" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center sm-p " id="navbarNavDropdown">
        <div class="justify-content-center flex-column w-100  ms-md-4 me-md-4">
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Contact</a>
            </li>
          </ul>
          <form  role="search">
              <input class="form-control w-100" type="search" placeholder="Search For Service" aria-label="Search" id="searchInput">
          </form>
        </div>
      </div>

        <button class="btn secondary-button mt-md-5 mb-md-2 me-md-4" type="button">Book Now</button>
        <a class="navbar-brand mt-md-5 mb-md-2 " href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart nav-icon" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </a>
        <a class="navbar-brand mt-md-5 mb-md-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person nav-icon" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
          </svg>
        </a>
      </div>
</nav> --}}
<!--bottom header-->

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> --}}
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        {{-- <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://sdsolutionseg.com/">SD-Solutions</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <!-- <b>Version</b> 3.2.0 -->
            </div> --}}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/dist/js/scripts.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('asset/dist/js/adminlte.js')}}"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
    {{-- <!-- AdminLTE for demo purposes -->
    <script src="{{asset('asset/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('asset/dist/js/pages/dashboard3.js')}}"></script>
    <script src="{{asset('asset/plugins/select2/js/select2.full.min.js')}}"></script> --}}

    <script src="{{asset('asset/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('asset/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/dist/js/scripts.js')}}"></script>


    {{-- <script>
          window.onload = function() {
            cartCounter();
        };
      function cartCounter(){
        let totalQuantity = JSON.parse(localStorage.getItem('totalQuantity'));
        console.log(totalQuantity);
        let counter = document.getElementById("counter");
        counter.innerHTML = totalQuantity;

      }

    </script> --}}

</body>

</html>
