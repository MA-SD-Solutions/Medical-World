@extends ('../welcome')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">blog Data</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" row">

                        <div class="col-7">
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Title :</label>
                                <label class="col-sm-7 col-form-label">{{ $blog->title ?? '-' }} </label>
                            </div>

                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Description :</label>
                                <label class="col-sm-7 col-form-label">{{ $blog->description ?? '-' }} </label>
                            </div>
                            @if ($blog->getFirstMediaUrl('blog_image'))
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Image :</label>
                                <label class="col-sm-7 col-form-label"><a href="{{ $blog->getFirstMediaUrl('blog_image') }}" target="_blank"><img src="{{ $blog->getFirstMediaUrl('blog_image') }}" alt="image" width="100" height="100"> </a></label>
                            </div>
                            @endif

                        </div>
                        <div class="col-5">
                            <div class="card card-purple">
                                <div class="card-header">
                                    <h3 class="card-title">Info</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                  <p>Created At: {{date('Y-m-d h:i:s A' , strtotime($blog->created_at))}}</p>
                                  <p>Created By: {{$blog->users->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
@endsection
