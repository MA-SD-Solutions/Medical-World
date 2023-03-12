@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Services';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Services</strong></h3>
                    <div class="col-md-2" style="float:right;">
                        {{-- @if(auth()->user()->isAbleTo(['product-create'])) --}}
                        <a href="{{route('services.create')}}">
                            <button type="button" title="Add User" class="btn btn-primary">
                               Add New
                            </button>
                        </a>
                        {{-- @endif --}}
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ ($services->currentpage()-1) * $services->perpage() + $loop->index + 1 }}</td>
                            <td>
                                {{-- <a href="{{ route('users.show',$product->id) }}"> --}}
                                    {{$service->name}}
                                {{-- </a> --}}
                            </td>
                            <td>{{$service->description}}</td>
                            <td>{{$service->price}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('services.show',$service->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route('services.edit',$service->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- @if(auth()->user()->isAbleTo(['product-delete'])) --}}
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
                {{ $services->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
