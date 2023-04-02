@extends('system.start')
@section('title', 'Home')

@section ('content')

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
                    <h6 class="text-center pt-2">
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
    <div class="about-section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 px-5">
                    <p class="fw-bold mb-2 light-primary-color">25+ years of experiences</p>
                    <h4 class="mb-4 fs-2 primary-color">We Are Always Ensure Best Medical Treatment For Your Health</h4>
                    <p class="text-muted w-75 fs-6 mb-5 about-text">There are many variations passages of your health available, but the majority have suffered alteration in some form, by injected humour. We are the startup studio with a mission for partner. There are many variations passages of your
                        health available, but the majority have suffered alteration in some form, by injected humour. We are the startup studio with a mission for partner.</p>
                    <button class="btn primary-button mt-md-1 mb-md-2" type="button">Start consultation</button>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('asset/dist/img/home-about-sec.PNG')}}" hidden-item" style="width:100%;height:100%;" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="services-section section-margin">
        <div class="container my-3">
            <div class="row">
                <h3 class="text-center light-primary-color">Our Services</h3>
                <a href="#" class="text-end mb-3 light-primary-color text-decoration-none">See All</a>
            </div>
            <div class="row mx-auto my-auto justify-content-center text-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active ">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="col-md-3">
                                <div class="card mx-1 ">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev  w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next  w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="image-section  section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <img src="{{asset('asset/dist/img/img-sec.png')}}" alt="" style="width:100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="specialist-section section-margin">
        <div class="container  my-3">
            <div class="row">
                <h3 class="text-center light-primary-color">Meet Our Specialist</h3>
                <a href="#" class="text-end mb-3 light-primary-color text-decoration-none">See All</a>
            </div>
            <div class="row mx-auto my-auto justify-content-center text-center">
                <div id="recipeCarousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active ">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="col-md-3">
                                <div class="card mx-1">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="col-md-3">
                                <div class="card mx-1 ">
                                    <img src="{{asset('asset/dist/img/service-slider.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Dental Care</h6>
                                        <span class="card-text text-muted fs-7">Dental Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev  w-aut" href="#recipeCarousel2" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next  w-aut" href="#recipeCarousel2" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-section section-margin">
        <div class="container">
            <div class="row">
                <a class="text-decoration-none"  href="{{route('system.gallery')}}"><h3 class="text-center light-primary-color mb-5">Gallery</h3></a>
            </div>

            <div class="row d-flex justify-content-center ">
                <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="service-gallery-item" style="position:relative;">
                        <img src="{{asset('asset/dist/img/gallery.jpg')}}" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                        <div class="service-gallery-title p-3 rounded" style="background-color: #ffffffd6; position: absolute;bottom: 38%;
            left: 25%;">
                            <a href="" class="text-decoration-none text-black">
                                <h3>Dental Service</h3>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-10 col-sm-10 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="service-gallery-item" style="position:relative;">
                        <img src="{{asset('asset/dist/img/gallery.jpg')}}" class="shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="451" height="300" />
                        <div class="service-gallery-title p-3 rounded" style="background-color: #ffffffd6; position: absolute;bottom: 38%;
            left: 25%;">
                            <a href="" class="text-decoration-none text-black">
                                <h3>Dental Service</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <div class="service-gallery-item" style="position:relative;">
                        <img src="{{asset('asset/dist/img/gallery.jpg')}}" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="641" height="370" />
                        <div class="service-gallery-title p-3 rounded" style="background-color: #ffffffd6; position: absolute;bottom: 38%;
            left: 32%;">
                            <a href="" class="text-decoration-none text-black">
                                <h3>Dental Service</h3>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="service-gallery-item" style="position:relative;">
                        <img src="{{asset('asset/dist/img/gallery.jpg')}}" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                        <div class="service-gallery-title p-3 rounded" style="background-color: #ffffffd6; position: absolute;bottom: 38%;
            left: 25%;">
                            <a href="" class="text-decoration-none text-black">
                                <h6>Dental Service</h6>
                            </a>
                        </div>
                    </div>
                    <div class="service-gallery-item" style="position:relative;">
                        <img src="{{asset('asset/dist/img/gallery.jpg')}}" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" width="261" height="174" />
                        <div class="service-gallery-title p-3 rounded" style="background-color: #ffffffd6; position: absolute;bottom: 38%;
            left: 25%;">
                            <a href="" class="text-decoration-none text-black">
                                <h6>Dental Service</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Gallery -->

        <!-- Gallery -->
    </div>
    <div class="patients-section section-margin">
        <div class="container  my-3">
            <div class="row mb-5 mt-5">
                <h3 class="text-center light-primary-color">Patients</h3>
            </div>
            <div class="row mx-auto my-auto justify-content-center text-center">
                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#137A7C" class="bi bi-people" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
            </svg>
                    <span class="my-3 light-primary-color">1000</span>
                    <span class="light-primary-color">patient</span>
                </div>
                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#137A7C" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
                    <span class="my-3 light-primary-color">1000</span>
                    <span class="light-primary-color">Doctor</span>
                </div>
                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#137A7C" class="bi bi-heart-pulse" viewBox="0 0 16 16">
              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z"/>
              <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z"/>
            </svg>
                    <span class="my-3 light-primary-color">1000</span>
                    <span class="light-primary-color">Service</span>
                </div>
                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#137A7C" class="bi bi-gift" viewBox="0 0 16 16">
              <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
            </svg>
                    <span class="my-3 light-primary-color">1000</span>
                    <span class="light-primary-color">Product</span>
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

