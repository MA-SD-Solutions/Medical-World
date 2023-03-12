@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Users';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Users</strong></h3>
                    <div style="float: right;">
                        <a href="/users?status=patient">
                            <button type="button" title="patints only" class="btn btn-secondary">
                               Patients
                            </button>
                        </a>
                        <a href="/users?status=doctor">
                            <button type="button" title="doctors only" class="btn btn-secondary">
                               Doctors
                            </button>
                        </a>
                        <a href="/users?status=admin">
                            <button type="button" title="admins only" class="btn btn-secondary">
                               Admin
                            </button>
                        </a>
                    </div>

                    <div class="col-md-2" style="float:right;">
                        @if(auth()->user()->isAbleTo(['users-create']))
                        <a href="{{route('addUser')}}">
                            <button type="button" title="Add User" class="btn btn-primary">
                               Add New
                            </button>
                        </a>
                        @endif
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>type</th>
                            <th>Created at</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                <a href="{{ route('users.show',$user->id) }}">
                                    {{$user->name}}
                                </a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <div class="d-flex">
                                <a href="{{route('users.show',$user->id)}}" title="Show" class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('users.edit',$user->id)}}" title="Edit" class="btn btn-success">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    @if(auth()->user()->isAbleTo(['users-delete']))
                                    <button type="submit" title="Delete" class="btn btn-danger">
                                        <i class="fa fa-ban"></i>
                                    </button>
                                    @endif
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
