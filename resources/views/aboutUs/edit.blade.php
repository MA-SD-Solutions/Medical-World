@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Add new membership</p>
                <form action="{{route('aboutUs.update')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <textarea name="description" id="description" cols="20" rows="5" class="form-control">{{$aboutUs->description ?? ''}}</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-text-height"></span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</body>

@endsection
