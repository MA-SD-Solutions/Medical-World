@extends ('../welcome')

@section('content')

    <body class="hold-transition register-page">
        <div class="container">
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Add New Blog</p>
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="name" class="form-check-labell">Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="title" class="form-control" placeholder="Title"
                                value="{{ old('title') }}" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-tag"></span>
                                </div>
                            </div>
                        </div>
                        <label for="description" class="form-check-labell">Description</label>
                        {{-- <div class="input-group mb-3">
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div> --}}
                        {{-- <x-forms.tinymce-editor/> --}}

                        {{-- <div class="input-group mb-3"> --}}
                        <textarea id="myeditorinstance" name="description" class="form-control">{{ old('description') }}</textarea>
                        {{-- </div> --}}


                        <label for="name" class="form-check-labell">key</label>
                        <div class="input-group mb-3">
                            <input type="text" name="key" class="form-control" placeholder="Key"
                                value="{{ old('title') }}" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-tag"></span>
                                </div>
                            </div>
                        </div>

                        <label for="name" class="form-check-labell">value</label>
                        {{-- <div class="input-group mb-3">
                        <input type="text" name="value" class="form-control" placeholder="Value" value="{{old('title')}}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                               <a href=""> <span class="fas fa-plus-circle fa-1x"></span> </a>
                            </div>
                        </div>
                    </div> --}}

                        <div class="jumbotron jumbotron-fluid" id="dataAdd">
                            <div class="container">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>value</label>
                                        <input class="form-control" name="value[]" id="middlename1" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="m-2">
                                <button type="button" class="btn btn-success" onclick="add()" id="addRow">Add row</button>
                            <button type="button" class="btn btn-danger" onclick="deleteBtn()" id="deleteRow">Delete row</button>
                            </div>
                            
                        </div>


                        <label for="service_image" class="form-check-labell">Blog Image</label>
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" name="blog_image" id="blog_image" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-image"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Create Blog</button>
                        </div>
                        <!-- /.col -->
                </div>
                </form>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    </body>

    <script type="text/javascript">
        // $(document).ready(function () {

        // $("#addRow").click(function(){
            let arr = []

        function add() {

            var len = $('#dataAdd .container .form-row').length + 1;

            $("#dataAdd .container:last").append(' <div class="form-row">' +
                '<div class="form-group col-md-12">' +
                ' <label></label>' +
                ' <input class="form-control" name="value[]" id="firstname ' + len + '" type="text">' +
                ' </div>' +
                '</div></div>');

            //    });
            // });
        }

        function deleteBtn(){
                var len = $('#dataAdd .container .form-row').length;
                if (len > 1) {
                    $("#dataAdd .container .form-row").last().remove();
                } else {
                    alert('Not able to Delete');
                }
            }
    </script>

@endsection
