@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="container">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Add New Service</p>
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="form-check-labell">Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for="description" class="form-check-labell">Description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label for="price" class="form-check-labell">Price</label>
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Price" type="number" name="price" id="price" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-paper-plane"></span>
                            </div>
                        </div>
                    </div>
                    <label for="service_image" class="form-check-labell">Service Image</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" name="service_image" id="service_image" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Create Service</button>
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
