@extends('system.start')
@section('title', 'Doctors')

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
              <img src="{{asset('asset/dist/img/slide-1.png')}}"  class="d-block w-100" alt="...">
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
    <div class="doctors section-margin">
        <div class="container ">
            <div class="row">
                <div class="col-10">
                    <section >
                        <div class="container py-1">
                          <div class="title pb-3 pt-3">
                            <h6 class="fs-4 fw-normal">All Doctors</h6>
                          </div>
                          @foreach ( $doctors as $doctor )
                          <div class="row">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="card mb-3 nav-color" style="height:153;">
                                    <div class="row g-0">
                                      <div class="col-md-3">
                                        <img
                                          src="{{asset('asset/dist/img/doctor.jpg')}}"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start w-100"
                                          style="height: 153px;"
                                        />
                                      </div>
                                      <div class="col-md-7">
                                        <div class="card-body">
                                          <h6 class="card-title fs-5 text-white fw-light">{{$doctor->name}}</h6>
                                          <p class="card-text text-muted">
                                            {{$doctor->phone}}
                                          </p>
                                          <p class="card-text">
                                            <div class="d-flex mb-2">
                                                <div class=" text-warning d-inline">
                                                  <i class="bi bi-star-fill checked-2" id="1" onclick="fireStar(this)"></i>
                                                  <i class="bi bi-star-fill checked-2" id="2" onclick="fireStar(this)"></i>
                                                  <i class="bi bi-star-fill checked-2" id="3" onclick="fireStar(this)"></i>
                                                  <i class="bi bi-star-fill" id="4"  onclick="fireStar(this)"></i>
                                                  <i class="bi bi-star-fill" id="5" onclick="fireStar(this)"></i>
                                                </div>
                                                <small class="text-muted d-inline ms-2 pt-1">({{$doctor->id}})</small>
                                            </div>
                                          </p>
                                        </div>
                                      </div>
                                      <div class="col-1 d-flex justify-content-end align-items-center">
                                        <a href="{{route('system.singleDoctor' , $doctor->id )}}" class="text-muted"><i class="bi bi-three-dots-vertical fs-3"></i></a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>

      <script>
        var getSiblings = function (elem) {

            // Setup siblings array and get the first sibling
            var siblings = [];
            var sibling = elem.parentNode.firstChild;

            // Loop through each sibling and push to the array
            while (sibling) {
                if (sibling.nodeType === 1 && sibling !== elem) {
                    siblings.push(sibling);
                }
                sibling = sibling.nextSibling
            }

            return siblings;

            };
        const previousSiblings = (elem) => {
            // create an empty array
            let siblings = [];

            // loop through previous siblings until `null`
            while (elem = elem.previousElementSibling) {
                // push sibling to array
                siblings.push(elem);
            }
            return siblings;
        };
        function fireStar(star){
            let allSiblings = getSiblings(star);
            for(let i=0 ; i<allSiblings.length ; i++){
                console.log(allSiblings[i]);
                allSiblings[i].classList.remove("checked-2");
            }
            let sib = previousSiblings(star);
            counter= star.id;
            star.classList.add("checked-2");
            for(let i=0 ; i<counter-1 ; i++){
                // console.log(sib[i]);
                sib[i].classList.add("checked-2");
            }
         }


      </script>
     @endsection


