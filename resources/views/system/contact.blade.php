@extends('system.start')
@section('title', 'Contact Us')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
    <div class="contact-title-section">
      <div class="container">
        <div class="row d-flex justify-content-center mb-5">
          <div class="col-9">
            <h2 class="text-center secondary-color fs-2 fw-bold mb-5">Contact Us</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form-container d-flex justify-content-center mb-5">
      <div class="contact-form d-flex justify-content-center bg-white rounded w-75 py-5 px-5">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-12 px-5 py-4">
                <form action="{{route('contact.create')}}" method="POST">
                    @csrf
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                    <label class="form-label text-muted fw-600" for="name" >Your name*</label>
                    <input type="text" id="nameInput" class="form-control" name="name" required/>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label text-muted fw-600" for="email">Contact email*</label>
                    <input type="email" id="emailInput" class="form-control" name="email" required/>
                  </div>

                  <!-- Mobile input -->
                  <div class="form-outline mb-4">
                    <label class="form-label text-muted fw-600" for="mobile">Mobile number*</label>
                    <input type="tel" id="mobileInput" class="form-control" name="mobile"  required/>
                  </div>

                   <!-- City input -->
                   <div class="form-outline mb-4">
                    <label class="form-label text-muted fw-600" for="city">City</label>
                    <select class="form-select text-muted" id="cityInput" name="city" aria-label="Default select example">
                      <option value="cairo" selected>Cairo</option>
                      <option value="giza">Giza</option>
                      <option value="alexendria">Alexendria</option>
                    </select>
                  </div>

                  <!-- Message input -->
                  <div class="form-outline mb-4">
                    <label class="form-label text-muted fw-600" for="message">Message</label>
                    <textarea class="form-control" id="messageInput" name="message" rows="4"></textarea>
                  </div>

                 <div class="contact-text">
                  <p class="text-muted pt-2 pb-4">
                    By submitting this form you agree to our terms and conditions and our Privacy Policy which explains how we may collect, use and disclose your personal information including to third parties.
                  </p>
                 </div>
                  <!-- Submit button -->
                  <input class="btn primary-button mt-md-1 mb-md-2" value="Send Message" type="submit">
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-title-section">
      <div class="container">
        <div class="row d-flex justify-content-center mb-5">
          <div class="col-9">
            <h2 class="text-center secondary-color fs-2 fw-bold mb-3">Contact</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-container d-flex justify-content-center mb-5">
      <div class="contact-info bg-white rounded w-75 p-5">
        <div class="container ">
          <div class="row">
            <div class="col-md-m6 col-lg-6 col-sm-12 ps-5 ps-5">
                <div class="branch ">
                  <h5 class="light-primary-color">Branch Name</h5>
                </div>
                <div class="location-bar py-2 mb-3">
                  <div class="item d-flex">
                    <div class="icon me-2 secondary-color">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="text light-primary-color">
                      <span>location. Address: Keas 69 Str. 15234, Chalandri</span>
                    </div>
                  </div>
                  <div class="item d-flex ">
                    <div class="icon me-2 secondary-color">
                      <i class="bi bi-telephone"></i>
                    </div>
                    <div class="text light-primary-color">
                      <span>+30-2106019311 </span>
                    </div>
                  </div>
                </div>
                <div class="branch ">
                  <h5 class="light-primary-color">Branch Name</h5>
                </div>
                <div class="location-bar py-2">
                  <div class="item d-flex">
                    <div class="icon me-2 secondary-color">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="text light-primary-color">
                      <span>location. Address: Keas 69 Str. 15234, Chalandri</span>
                    </div>
                  </div>
                  <div class="item d-flex ">
                    <div class="icon me-2 secondary-color">
                      <i class="bi bi-telephone"></i>
                    </div>
                    <div class="text light-primary-color">
                      <span>+30-2106019311 </span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-m6 col-lg-6 col-sm-12 ps-5">
              <div class="branch">
                <h5 class="light-primary-color">Branch Name</h5>
              </div>
              <div class="location-bar py-2 mb-3">
                <div class="item d-flex">
                  <div class="icon me-2 secondary-color">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="text light-primary-color">
                    <span>location. Address: Keas 69 Str. 15234, Chalandri</span>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="icon me-2 secondary-color">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="text light-primary-color">
                    <span>+30-2106019311 </span>
                  </div>
                </div>
              </div>

              <div class="branch">
                <h5 class="light-primary-color">Branch Name</h5>
              </div>
              <div class="location-bar py-2">
                <div class="item d-flex">
                  <div class="icon me-2 secondary-color">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="text light-primary-color">
                    <span>location. Address: Keas 69 Str. 15234, Chalandri</span>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="icon me-2 secondary-color">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="text light-primary-color">
                    <span>+30-2106019311 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
