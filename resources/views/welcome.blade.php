<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Logout
                                </a>
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('dashboard')}}" class="brand-link">
                <img src="{{asset('asset/dist/img/sd.png')}}" alt="sd Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Clinic System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="{{Route('profile')}}" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-item">
                            <a href="{{route('users.index')}}?status=users" class="nav-link {{ request()->is('users?status=users') ? 'active':'' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{route('users.index')}}?status=clients" class="nav-link {{ request()->is('users?status=clients') ? 'active':'' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Clients
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link {{ request()->is('products') ? 'active':'' }}">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/website" class="nav-link">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>
                                    Website
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{route('index.website')}}" class="nav-link {{ request()->is('website')|| request()->is('website/*') ? 'active':'' }}">
                                        <i class="nav-icon fas fa-user-tag"></i>
                                        <p>
                                            Home Page
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('index.aboutUs')}}" class="nav-link {{ request()->is('aboutUs')|| request()->is('aboutUs/*') ? 'active':'' }}">
                                        <i class="nav-icon fas fa-user-lock"></i>
                                        <p>
                                            About Us
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services.index')}}" class="nav-link {{ request()->is('services') ? 'active':'' }}">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->isAbleTo('roles-create|roles-read|roles-update|roles-delete|permissions-read|permissions-delete'))
                        <li class="nav-item has-treeview">
                            <a href="/authorization" class="nav-link">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>
                                    Authorization
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{route('index.roles')}}" class="nav-link {{ request()->is('roles')|| request()->is('roles/*') ? 'active':'' }}">
                                        <i class="nav-icon fas fa-user-tag"></i>
                                        <p>
                                            Roles
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('index.permissions')}}" class="nav-link {{ request()->is('permissions')|| request()->is('permissions/*') ? 'active':'' }}">
                                        <i class="nav-icon fas fa-user-lock"></i>
                                        <p>
                                            Permissions
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                          <li class="nav-item">
                            <a href="{{route('images.index')}}" class="nav-link {{ request()->is('images') ? 'active':'' }}">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Gallary
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('carts.index')}}" class="nav-link {{ request()->is('carts') ? 'active':'' }}">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Cart
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row" style="display: block;">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <h5>{{ session()->get('success') }}</h5>
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                <h5>{{ session()->get('error') }}</h5>
                            </ul>
                        </div>
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
                        {{ Breadcrumbs::render() }}
                        <!-- /.col-md-6 -->
                        @yield('content')
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://sdsolutionseg.com/">SD-Solutions</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <!-- <b>Version</b> 3.2.0 -->
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('asset/dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('asset/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('asset/dist/js/pages/dashboard3.js')}}"></script>
    <script src="{{asset('asset/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })

        $(function () {
            var url = window.location;
            // for sidebar menu and treeview
            $('ul.nav-treeview a').filter(function () {
                return this.href == url;
            }).parentsUntil(".nav-sidebar > .nav-treeview")
                .css({'display': 'block'})
                .addClass('menu-open').prev('a');
                // .addClass('active');
        });
    </script>
</body>

</html>
