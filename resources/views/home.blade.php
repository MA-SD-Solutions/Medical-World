@extends ('../welcome')


@section ('content')
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$usersCount}}</h3>

        <p>Users</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="/users?status=admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
@endsection
