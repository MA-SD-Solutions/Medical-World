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
                        <a href="{{route('blogs.create')}}">
                            <button type="button" title="Add Blog" class="btn btn-primary">
                               Add New
                            </button>
                        </a>
                        {{-- @endif --}}
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 600px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            {{-- <th>Description</th> --}}
                            <th>Created By</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ ($blogs->currentpage()-1) * $blogs->perpage() + $loop->index + 1 }}</td>
                            <td>
                                {{$blog->title}}
                            </td>
                            <td>{{$blog->users->name}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('blogs.show',$blog->id)}}" title="Show" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route('blogs.edit',$blog->id)}}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
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
                {{ $blogs->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
