@extends('system.start')
@section('title', 'Home')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body d-flex justify-content-center text-center">
                    <!-- Profile picture image-->
                    <div class="position-relative">
                        <form action="{{route('system.changeProfileImage')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="circle justify-content-center">
                                <img class="profile-pic rounded-circle" src="{{ $user->getFirstMediaUrl('profile_image') }}" width="130">
                                <div class="p-image primary-upload-button rounded-circle px-1 py-0 text-center">
                                    <i class="bi bi-camera upload-button fs-4 text-white"> </i>
                                    <input class="file-upload" name="profile_image" type="file" onClick='' accept="image/*" />
                                </div>
                                <div>
                                    <input type="submit" value="Change" class="btn primary-button mt-3 text-center">
                                </div>
                            </div>
                        </form>
                        
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{route('system.edit_profile')}}" method="post">
                        @csrf
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="name" value="{{$user->name}}">
                        </div>
                        <!-- Form Row-->
                        {{-- <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="firstName">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="lastName">
                            </div>
                        </div> --}}
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <!-- Form Group (location)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputLocation">Address</label>
                                <input class="form-control" id="inputLocation" type="text" value="{{$user->address}}" placeholder="Enter your location" name="address">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" value="{{$user->email}}" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" value="{{$user->phone}}" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <input class="btn primary-button mb-md-2 me-md-4" type="submit" value="Save changes">
                    </form>
                </div>
            </div>
            <!--Orders-->
            <h5 class="form-label text-center" >My Orders</h5>
            <div class="card mb-4">
                
                @foreach ($orders as $order)
                <div class="card-header">Order {{$order->id}}</div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div id="parentCheck">
                                @foreach ( $order->billDetails as $detail )
                                    
                                
                                <div class="card rounded-3 mb-4">
                                    
                                    <div class="card-body py-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                               
                                                {{-- <img src="images/cosmetic.jpg" class="img-fluid rounded-3"> --}}
                                            </div>
                                            <div class="col-md-3 card-info col-lg-3 col-xl-3">
                                                <p class="fw-normal mb-2">{{$detail->name}}
                                                </p>
                                            </div>
                                            <div class="col-md-3 card-info col-lg-3 col-xl-2 d-flex">
                                                <p>{{$detail->quantity}}</p>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 card-info">
                                                <span class="d-inline"></span>
                                                <p class="mb-0 item-price d-inline ">{{(double)$detail->price * (double)$detail->quantity}}</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                @endforeach
                            </div>
                            <div><h5>Total: {{$order->total_price}}</h5></div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>

@endsection