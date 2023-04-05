@extends ('../welcome')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Bill Data</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class=" row">

                        <div class="col-7">
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Name :</label>
                                <label class="col-sm-7 col-form-label">{{ $offer->name ?? '-' }} </label>
                            </div>

                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Description :</label>
                                <label class="col-sm-7 col-form-label">{{ $offer->description ?? '-' }} </label>
                            </div>
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Value :</label>
                                <label class="col-sm-7 col-form-label">{{ $offer->value ?? '-' }} </label>
                            </div>
                            <div class=" row">
                                <label class="col-sm-5 col-form-label">Old Value :</label>
                                <label class="col-sm-7 col-form-label">{{ $offer->oldValue ?? '-' }} </label>
                            </div>
                            @if ($offer->getFirstMediaUrl('offer_image'))
                            <div class="row">
                                <label class="col-sm-5 col-form-label">Image :</label>
                                <label class="col-sm-7 col-form-label"><a href="{{ $offer->getFirstMediaUrl('offer_image') }}" target="_blank"><img src="{{ $offer->getFirstMediaUrl('offer_image') }}" alt="image" width="100" height="100"> </a></label>
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
                                  <p>Created At: {{date('Y-m-d h:i:s A' , strtotime($offer->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Name</th>
                                {{-- <th>Old Value</th> --}}
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bills as $bill)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                 {{$bill->type}}
                                </td>
                                <td>{{$bill->name ?? ''}}</td>
                                {{-- <td>{{$bill->billDetails->name ?? ''}}</td> --}}
                                <td>{{$bill->price}}</td>
                                <td>{{$bill->quantity}}</td>
                                <td>{{$bill->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
@endsection
