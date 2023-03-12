@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="container">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Edit Photo</p>
                <form action="{{ route('images.update' , $image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="description" class="form-check-labell">Service</label>
                    <div class="input-group mb-3">
                        <select name="type" id="type" class="form-control">
                            <option value="" hidden required>Select Service</option>
                            @foreach ( $services as $service)
                            <option value="{{$service->id}}" @if ($service->id == $image->type) selected @endif >{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Edit Image</button>
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
