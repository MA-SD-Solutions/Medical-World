@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Gallary';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Offers</strong></h3>
                    <div class="col-md-2" style="float:right;">
                        {{-- @if(auth()->user()->isAbleTo(['image-create'])) --}}
                        <a href="{{route('offers.create')}}">
                            <button type="button" title="Add Offer" class="btn btn-primary">
                               Add New
                            </button>
                        </a>
                        {{-- @endif --}}
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Old Value</th>
                            {{-- <th>Description</th> --}}
                            <th>Added At</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $offer)
                        <tr>
                            <td>{{ ($offers ->currentpage()-1) * $offers ->perpage() + $loop->index + 1 }}</td>
                            <td>
                             {{$offer->name}}
                            </td>
                            <td>{{$offer->value ?? ''}}</td>
                            <td>{{$offer->oldValue ?? ''}}</td>
                            {{-- <td>{{$offer->description}}</td> --}}
                            <td>{{$offer->created_at}}</td>


                            <td>
                                <div class="d-flex">
                                    <a href="{{route('offers.show',$offer->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    {{-- <a href="{{route('images.edit',$image->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    {{-- </a> --}}
                                    <form action="{{ route('offers.destroy',$offer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- @if(auth()->user()->isAbleTo(['offer-delete'])) --}}
                                        <button type="submit" title="Delete" class="btn btn-danger">
                                            <i class="fa fa-ban"></i>
                                        </button>
                                        {{-- @endif --}}
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div>
                {{ $offers->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
