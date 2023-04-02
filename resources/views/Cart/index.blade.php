@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Gallary';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Carts</strong></h3>
                    <div class="col-md-2" style="float:right;">
                        {{-- @if(auth()->user()->isAbleTo(['image-create'])) --}}
                        <a href="{{route('carts.checkout')}}">
                            <button type="button" title="checkout" class="btn btn-primary">
                                checkout
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
                            <th>User Name</th>
                            <th>Added At</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                        <tr>
                            <td>{{ ($carts->currentpage()-1) * $carts->perpage() + $loop->index + 1 }}</td>
                            <td>{{$cart->products[0]->name ?? $cart->services[0]->name ?? $cart->offers[0]->name ?? ''}}</td>
                            <td>{{$cart->users[0]->name ?? ''}}</td>
                            <td>{{$cart->created_at}}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- <a href="{{route('images.show',$image->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    {{-- <a href="{{route('carts.edit',$cart->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    {{-- </a> --}}
                                    <form action="{{ route('carts.destroy',$cart->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- @if(auth()->user()->isAbleTo(['image-delete'])) --}}
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
                {{ $carts->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
