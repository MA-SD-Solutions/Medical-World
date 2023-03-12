@extends ('../welcome')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Service Data</h3>

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
                                <label class="col-sm-5 col-form-label">Name :</label>
                                <label class="col-sm-7 col-form-label">{{ $service->name ?? '-' }} </label>
                            </div>

                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Description :</label>
                                <label class="col-sm-7 col-form-label">{{ $service->description ?? '-' }} </label>
                            </div>
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Price :</label>
                                <label class="col-sm-7 col-form-label">{{ $service->price ?? '-' }} </label>
                            </div>
                            @if ($service->getFirstMediaUrl('service_image'))
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Image :</label>
                                <label class="col-sm-7 col-form-label"><a href="{{ $service->getFirstMediaUrl('service_image') }}" target="_blank"><img src="{{ $service->getFirstMediaUrl('service_image') }}" alt="image" width="100" height="100"> </a></label>
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
                                  <p>Created At: {{date('Y-m-d h:i:s A' , strtotime($service->created_at))}}</p>
                                  <p>Created By: {{$service->users->name}}</p>

                                  {{-- @if ($service->getFirstMediaUrl() != null) --}}
                                  {{-- <h6>Attatchment: </h6> --}}
                                  {{-- <a href="{{$service->getFirstMediaUrl()}}" target="_blank" title="open"> --}}
                                    {{-- <embed src="{{$service->getFirstMediaUrl()}}" width="230px"/> --}}
                                        {{-- <span class="fa fa-file-download fa-4x"></span><br> --}}
                                        {{-- Click Here to open Attachment --}}
                                    {{-- <img src="{{$service->getFirstMediaUrl()}}" width="230px"> --}}
                                  {{-- </a> --}}
                                  {{-- @endif --}}
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
