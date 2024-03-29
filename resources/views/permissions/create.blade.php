@extends ('../welcome')


@section ('content')
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Add New Permission</p>

      <form  action="{{ route('permissions.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Display Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
        </div>
        <div class="form-group mb-3">
            <label>Description</label>
          <textarea type="tex" class="form-control" placeholder="Description"  rows="7" cols="50" name="description"></textarea>
        </div>
          <div class="col-6" style="float:right;">
            <button type="submit" class="btn btn-primary">Add Permission</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
@endsection

