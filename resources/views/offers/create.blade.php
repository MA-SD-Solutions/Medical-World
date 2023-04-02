@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="container">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Add New Offer</p>
                <form action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="gallary_image" class="form-check-labell">Image</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" name="offer_image" id="offer_image" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>

                    <label for="name" class="form-check-labell">Name</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="name" id="name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <label for="value" class="form-check-labell">value</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="number" name="value" id="value" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-sort-numeric-asc"></span>
                            </div>
                        </div>
                    </div>

                    <label for="name" class="form-check-labell">old value</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="number" name="oldValue" id="oldValue" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-sort-numeric-asc"></span>
                            </div>
                        </div>
                    </div>

                    <label for="name" class="form-check-labell">Description</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="description" id="description" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-text-height"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Add Offer</button>
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
