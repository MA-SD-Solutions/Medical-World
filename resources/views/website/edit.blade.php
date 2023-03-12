@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
    <div class="">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Edit Website Data</p>
                <form action="{{route('website.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- <input type="hidden" name="user_id" value=""> -->
                    <div class="input-group mb-3">
                        <input type="file" name="header_photo" class="form-control" value="{{$website->header_photo ?? ''}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file-alt"> Header Photo</span>
                            </div>
                        </div>
                    </div>
                    @if ($website)
                    @if ($website->getFirstMediaUrl('header_photo'))
                    <div class="row">
                        <label class="col-sm-7 col-form-label"><a href="{{ $website->getFirstMediaUrl('header_photo') }}" target="_blank"><img src="{{ $website->getFirstMediaUrl('header_photo') }}" alt="image" width="100" height="100"> </a></label>
                    </div>
                    @endif
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" name="header_title" class="form-control" value="{{$website->header_title ?? ''}}"
                            placeholder="Header Title">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-paragraph"> Header Title</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="blog_header" class="form-control" value="{{$website->blog_header ?? ''}}"
                            placeholder="Blog Header">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-paragraph"> Blog Header</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="blog_body" id="blog_body" cols="20" rows="5" class="form-control">{{$website->blog_body ?? ''}}</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-text-height"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Blog Button" value="{{$website->blog_button ?? ''}}"
                            name="blog_button">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-circle"> Blog Button</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="blog_image" class="form-control" value="{{$website->blog_image ?? ''}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file-alt"> Blog Image</span>
                            </div>
                        </div>
                    </div>
                    @if ($website)
                    @if ($website->getFirstMediaUrl('blog_image'))
                    <div class="row">
                        <label class="col-sm-7 col-form-label"><a href="{{ $website->getFirstMediaUrl('blog_image') }}" target="_blank"><img src="{{ $website->getFirstMediaUrl('blog_image') }}" alt="image" width="100" height="100"> </a></label>
                    </div>
                    @endif
                    @endif

                    <div class="input-group mb-3">
                        <input type="file" name="advertisement_image" class="form-control" value="{{$website->advertisement_image ?? ''}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file-alt"> Advertisement Image</span>
                            </div>
                        </div>
                    </div>
                    @if ($website)
                    @if ($website->getFirstMediaUrl('advertisement_image'))
                    <div class="row">
                        <label class="col-sm-7 col-form-label"><a href="{{ $website->getFirstMediaUrl('advertisement_image') }}" target="_blank"><img src="{{ $website->getFirstMediaUrl('advertisement_image') }}" alt="image" width="100" height="100"> </a></label>
                    </div>
                    @endif
                    @endif

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Edit Website Data</button>
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
