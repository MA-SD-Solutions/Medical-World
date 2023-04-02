@extends ('../welcome')


@section ('content')
<?php
    $pagename = 'Contacts';
?>
<!-- /.row -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Contacts</strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height:550px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>City</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ ($contacts ->currentpage()-1) * $contacts ->perpage() + $loop->index + 1 }}</td>
                            <td>
                                {{-- <a href="{{ route('users.show',$product->id) }}"> --}}
                                    {{$contact->name}}
                                {{-- </a> --}}
                            </td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->mobile}}</td>
                            <td>{{$contact->city}}</td>
                            <td>{{$contact->message}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="container">
                {{ $contacts->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
<!-- /.row -->
@endsection
