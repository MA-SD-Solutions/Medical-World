@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Gallary';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Images</strong></h3>
                    <div class="col-md-2" style="float:right;">
                        {{-- @if(auth()->user()->isAbleTo(['image-create'])) --}}
                        <a href="{{route('images.create')}}">
                            <button type="button" title="Add Image" class="btn btn-primary">
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
                            <th>Type</th>
                            <th>Added By</th>
                            <th>Added At</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                        <tr>
                            <td>{{ ($images ->currentpage()-1) * $images ->perpage() + $loop->index + 1 }}</td>
                            <td>
                                {{-- <a href="{{ route('users.show',$image->id) }}"> --}}
                                   <a href="{{$image->name}}" target="_blank"> <img src="{{$image->name}}" width="150" height="100" alt="Photo"> </a>
                                {{-- </a> --}}
                            </td>
                            <td>{{$image->services->name ?? ''}}</td>
                            <td>{{$image->users->name ?? ''}}</td>
                            <td>{{$image->created_at}}</td>


                            <td>
                                <div class="d-flex">
                                    {{-- <a href="{{route('images.show',$image->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    <a href="{{route('images.edit',$image->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <form action="{{ route('images.destroy',$image->id) }}" method="POST">
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
                {{ $images->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
