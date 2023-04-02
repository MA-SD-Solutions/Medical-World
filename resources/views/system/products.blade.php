@extends('system.start')
@section('title', 'Products')

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
    <div class="products section-margin">
        <div class="container ">
            <div class="row">
                <div class="col-3 py-5">
                  <form action="">
                    <div class="price-range mb-5">
                      <i class="bi bi-sliders fs-3"></i>
                      <strong class="ms-2"><span>Filter By Price</span></strong>
                      <label  class="form-label d-block mt-2">Price :</label>
                      <span class="multi-range">
                        <input type="range" min="0" max="50" value="5" id="lower" name="lower">
                        <input type="range" min="0" max="50" value="45" id="upper" name="upper">
                      </span>
                    </div>
                    <div class="product-category my-5">
                      <i class="bi bi-grid fs-3"></i>
                      <strong class="ms-2 mb-3"><span>Category</span></strong>
                      <div class="form-check mt-4 mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-category" id="all-categories">
                        <label class="form-check-label" for="all-categories">
                          All
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-category" id="product-category1" checked>
                        <label class="form-check-label" for="product-category1">
                          Category 1
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-category" id="product-category2" checked>
                        <label class="form-check-label" for="product-category2">
                          Category 2
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-category" id="product-category3" checked>
                        <label class="form-check-label" for="product-category3">
                          Category 3
                        </label>
                      </div>

                    </div>
                    <div class="product-category my-5">
                      <i class="bi bi-grid fs-3"></i>
                      <strong class="ms-2 mb-3"><span>Brand</span></strong>
                      <div class="form-check mt-4 mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-brand" id="all-brands">
                        <label class="form-check-label" for="all-brands">
                          All
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-brand" id="product-brand1" checked>
                        <label class="form-check-label" for="product-brand1">
                          Brand 1
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-brand" id="product-brand2" checked>
                        <label class="form-check-label" for="product-brand2">
                          Brand 2
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input custom-control-input" type="radio" name="product-brand" id="product-brand3" checked>
                        <label class="form-check-label" for="product-brand3">
                          Brand 3
                        </label>
                      </div>

                    </div>
                  </form>

                </div>
                <div class="col-9">
                    <section>
                        <div class="text-center container py-5">
                          <div class="row">
                            @foreach ($products as $product )


                            <div class="col-lg-4 col-md-12 mb-4">
                              <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="{{asset('asset/dist/img/cosmetic.jpg')}}"
                                    width="251" height="167"
                                    class="w-100" />

                                </div>
                                <div class="card-body position-relative">
                                  <a href="" class="text-reset text-decoration-none">
                                    <h5 class="card-title mb-3">{{$product->name}}</h5>
                                  </a>
                                  <div class="d-flex justify-content-center mb-2">
                                    <div class=" text-warning">
                                      <i class="bi bi-star-fill checked" id="1" onclick="fireStar(this)"></i>
                                      <i class="bi bi-star-fill checked" id="2" onclick="fireStar(this)"></i>
                                      <i class="bi bi-star-fill checked" id="3" onclick="fireStar(this)"></i>
                                      <i class="bi bi-star-fill"id="4"  onclick="fireStar(this)"></i>
                                      <i class="bi bi-star-fill" id="5" onclick="fireStar(this)"></i>
                                    </div>
                                  </div>
                                  <h6 class="mb-3">${{$product->price}}</h6>
                                  <div class="onHover-actions position-absolute light-primary-color w-50">
                                    <div class="action-icons d-flex justify-content-around">
                                      <i class="bi bi-heart"></i>
                                      <i class="bi bi-cart"></i>
                                     <a href="{{route('system.singleProduct' , $product->id)}}"><i class="bi bi-eye"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
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
                allSiblings[i].classList.remove("checked");
            }
            let sib = previousSiblings(star);
            counter= star.id;
            star.classList.add("checked");
            for(let i=0 ; i<counter-1 ; i++){
                // console.log(sib[i]);
                sib[i].classList.add("checked");
            }
         }

         var lowerSlider = document.querySelector('#lower'),
          upperSlider = document.querySelector('#upper'),
          lowerVal = parseInt(lowerSlider.value);
          upperVal = parseInt(upperSlider.value);

        upperSlider.oninput = function() {
          lowerVal = parseInt(lowerSlider.value);
          upperVal = parseInt(upperSlider.value);

          if (upperVal < lowerVal + 4) {
              lowerSlider.value = upperVal - 4;

              if (lowerVal == lowerSlider.min) {
                upperSlider.value = 4;
              }
          }
          console.log(lowerVal);
          console.log(upperVal);
        };


      lowerSlider.oninput = function() {
      lowerVal = parseInt(lowerSlider.value);
      upperVal = parseInt(upperSlider.value);

      if (lowerVal > upperVal - 4) {
          upperSlider.value = lowerVal + 4;

          if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
          }

      }
      console.log(lowerVal);
    console.log(upperVal);
    };


      </script>

@endsection

