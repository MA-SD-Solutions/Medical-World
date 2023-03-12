@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Edit Product</p>
                <form action="{{ route('products.update',$product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- <input type="hidden" name="product_id" value="{{$product->id}}"> --}}
                    <label for="name" class="form-check-labell">Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$product->name}}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for="description" class="form-check-labell">Description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{$product->description}}</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label for="price" class="form-check-labell">Price</label>
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Price" type="number" name="price" id="price"  value="{{$product->price}}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-car"></span>
                            </div>
                        </div>
                    </div>
                    <label for="quantity" class="form-check-labell">Quantity</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Quantity"
                            name="quantity" id="quantity" value="{{$product->quantity}}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-car"></span>
                            </div>
                        </div>
                    </div>


                    <div class="col-6" style="float:right;">
                        <button type="submit" class="btn btn-primary">Edit Product</button>
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
