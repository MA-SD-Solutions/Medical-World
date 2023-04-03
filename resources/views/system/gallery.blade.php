@extends('system.start')
@section('title', 'Gallery')

@section('content')

<!--slider and specialties section-->
<div class="main-section">
    <div class="main-slider">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('asset/dist/img/slide-1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset/dist/img/slide-2.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="specialties d-flex justify-content-center align-items-center flex-column ">
        <div class="specialties-container d-flex justify-content-center align-items-center flex-column">
            <div class="container">
                <h6 class="text-center pt-2 hidden-item">
                    Choose from Services by specialties
                </h6>
                <div class="row">
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                        <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                      </svg>
                     </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7">
                      specialty-1
                    </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon  rounded-circle border mt-2">
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                      <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7">
                    specialty-2
                  </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                      <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7">
                    specialty-3
                  </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                      <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7">
                    specialty-4
                  </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                      <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7">
                    specialty-5
                  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="gallery-section section-margin">
    <div class="container">
        <div class="row">
            <h3 class="text-center light-primary-color mb-5">Gallery</h3>
        </div>
        <div class="services-gallery py-5">
            {{-- <ul class="nav nav-pills mb-5 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link  active" id="pills-category-1-tab" data-bs-toggle="pill" data-bs-target="#pills-category-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item " role="presentation">
                    <button class="nav-link text-dark" id="pills-category-2-tab" data-bs-toggle="pill" data-bs-target="#pills-category-1" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item " role="presentation">
                    <button class="nav-link text-dark" id="pills-category-3-tab" data-bs-toggle="pill" data-bs-target="#pills-category-3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
            </ul> --}}
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-category-1" role="tabpanel" aria-labelledby="pills-category-1-tab">
                    <div class="row d-flex justify-content-center ">
                        @foreach ($gallery as $image)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0 d-flex">
                            {{-- <div class="service-gallery-item"> --}}
                              <a href="{{$image->getFirstMediaUrl('gallary_image')}}" target="_blank"><img src="{{$image->getFirstMediaUrl('gallary_image')}}" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="400" height="300" /></a>
                            {{-- </div> --}}
                        </div>

                        {{-- <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                            </div>
                        </div> --}}
                        @endforeach
                        <hr>
                    </div>
                    {{-- <div class="row d-flex justify-content-center">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="641" height="370" />
                            </div>

                        </div>

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                        </div>
                    </div> --}}
                </div>


                {{-- <div class="tab-pane fade" id="pills-category-2" role="tabpanel" aria-labelledby="pills-category-2-tab">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="641" height="370" />
                            </div>

                        </div>

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-category-3" role="tabpanel" aria-labelledby="pills-category-3-tab">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="641" height="370" />
                            </div>

                        </div>

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                            <div class="service-gallery-item">
                                <img src="images/gallery.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
</div>
<script>
    const searchInput = document.querySelector('#searchInput');
    searchInput.addEventListener('keyup', function(event) {
        const query = searchInput.value;
        const tags = document.querySelectorAll('span');

        for (let i = 0; i < tags.length; i++) {
            if (tags[i].textContent.includes(query)) {
                console.log(tags[i]);
            }
        }
    });
</script>
@endsection
