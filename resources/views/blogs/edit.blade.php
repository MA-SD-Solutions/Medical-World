@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Edit Blog</p>
                <form action="{{ route('blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="name" class="form-check-labell">Title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$blog->title}}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for="description" class="form-check-labell">Description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{$blog->description}}</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if (!$blog->getFirstMediaUrl('blog_image'))
                        <label for="service_image" class="form-check-labell">Blog Image</label>
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" name="blog_image" id="blog_image" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-image"></span>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    <div class="col-6" style="float:right;">
                        <button type="submit" class="btn btn-primary">Edit blog</button>
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
