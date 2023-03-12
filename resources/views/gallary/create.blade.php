@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="container">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Add New Photo</p>
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="description" class="form-check-labell">Service</label>
                    <div class="input-group mb-3">
                        <select name="type" id="type" class="form-control">
                            <option value="" hidden required>Select Service</option>
                            @foreach ( $services as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="gallary_image" class="form-check-labell">Image</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" name="gallary_image" id="gallary_image" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Add Image</button>
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
