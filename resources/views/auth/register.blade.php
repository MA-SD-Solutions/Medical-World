<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic System</title>
    <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- {{ asset('db-assets/img/favicon.png') }} -->
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition register-page">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            <h5>{{ session()->get('error') }}</h5>
        </ul>
    </div>
    @endif

    <div class="register-box">
        <div class="register-logo">
            <b class="text-primary">SD Soluotions</b><br><h3 class="text-secondary"> Clinic management System</h3>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register</p>

                <form action="{{ route('storeUser') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        {{-- <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required> --}}
                        <select name="type" id="type" class="form-control" placeholder="Select type ...">
                            <option value="" hidden>Select type</option>
                            <option value="doctor">Doctor</option>
                            <option value="patient">Patient</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-alt"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-mobile"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="city" class="form-control" placeholder="City" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-flag"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="area" class="form-control" placeholder="Area" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-building"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        {{-- <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required> --}}
                        <select name="gender" id="gender" class="form-control" placeholder="Select Gender ...">
                            <option value="" hidden>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-male"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="date" name="birthdate" class="form-control" placeholder="Birthdate" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-birthday-cake"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block">Register</button>
                        </div>
                        <!-- /.col -->

                    </div>
                </form>
                <div class="d-flex">
                    <h5>Have an Account ? </h5> <a href="{{route('login')}}" class="ml-1"> Sign In</a>
                </div>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery -->
    <script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>
</body>

</html>
