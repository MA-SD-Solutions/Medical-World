@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Gallary';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Bills</strong></h3>
                    <div class="col-md-2" style="float:right;">
                        {{-- @if(auth()->user()->isAbleTo(['image-create'])) --}}
                        {{-- <a href="{{route('offers.create')}}">
                            <button type="button" title="Add Offer" class="btn btn-primary">
                               Add New
                            </button>
                        </a> --}}
                        {{-- @endif --}}
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Total Price</th>
                            <th>created By</th>
                            {{-- <th>Old Value</th> --}}
                            <th>Shipping Fees</th>
                            <th>taxes</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                        <tr>
                            <td>{{ ($bills ->currentpage()-1) * $bills ->perpage() + $loop->index + 1 }}</td>
                            <td>
                             {{$bill->total_price}}
                            </td>
                            <td>{{$bill->users->name ?? ''}}</td>
                            {{-- <td>{{$bill->billDetails->name ?? ''}}</td> --}}
                            <td>{{$bill->shipping_fees}}</td>
                            <td>{{$bill->taxes}}</td>


                            <td>
                                {{-- <div class="d-flex"> --}}
                                    <a href="{{route('bills.show',$bill->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    {{-- <a href="{{route('images.edit',$image->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    {{-- </a> --}}
                                    {{-- <form action="{{ route('offers.destroy',$offer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE') --}}
                                        {{-- @if(auth()->user()->isAbleTo(['offer-delete'])) --}}
                                        {{-- <button type="submit" title="Delete" class="btn btn-danger">
                                            <i class="fa fa-ban"></i>
                                        </button> --}}
                                        {{-- @endif --}}
                                    {{-- </form> --}}
                                {{-- </div> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div>
                {{ $bills->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
