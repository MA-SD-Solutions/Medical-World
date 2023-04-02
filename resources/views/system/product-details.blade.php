@extends('system.start')
@section('title', 'Single Product')

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

    <div class="product pb-5" id="{{$product->id}}">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-12">
            <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
              <div class="row py-3 shadow-5">
                <div class="col-12 mb-1">
                  <div class="lightbox mb-5">
                    <img
                      src="{{asset('asset/dist/img/cosmetic.jpg')}}"
                      alt="Gallery image 1"
                      class="ecommerce-gallery-main-img rounded w-100"
                      height="400"
                      id="expandedImg"
                    />
                  </div>
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="{{asset('asset/dist/img/cosmetic.jpg')}}"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
                    alt="Gallery image 1"
                    width="100" height="100"
                    class="rounded"
                    onclick="myFunction(this);"


                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="{{asset('asset/dist/img/c-2.jpg')}}"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                    alt="Gallery image 2"
                    width="100" height="100"
                    class="rounded"
                    onclick="myFunction(this);"

                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="{{asset('asset/dist/img/c-3.jpg')}}"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                    alt="Gallery image 3"
                    width="100" height="100"
                    class="rounded"
                    onclick="myFunction(this);"

                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="{{asset('asset/dist/img/c-4.jpg')}}"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
                    alt="Gallery image 4"
                    width="100" height="100"
                    class="rounded"
                    onclick="myFunction(this);"

                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
          <div class="col-lg-5 col-sm-10">
              <div class="product-details">
              <h2 class="text-uppercase mt-3 " id="product-name">{{$product->name}}</h2>
              <div class="d-flex mb-5">
                <div class=" text-warning">
                  <i class="bi bi-star-fill checked fs-3" id="1" onclick="fireStar(this)"></i>
                  <i class="bi bi-star-fill fs-3" id="2" onclick="fireStar(this)"></i>
                  <i class="bi bi-star-fill fs-3" id="3" onclick="fireStar(this)"></i>
                  <i class="bi bi-star-fill fs-3"id="4"  onclick="fireStar(this)"></i>
                  <i class="bi bi-star-fill fs-3" id="5" onclick="fireStar(this)"></i>
                </div>
              </div>
              <h3 class="d-inline">Description</h3>
              <hr>
              <p>Hills Science Plan Healthy Development Puppy Food Large Breed With Chicken Is Specifically Formulated To Meet The Nutritional Needs Of Your Large Breed Puppy To Help Support Its Growth And Development. <br> <br> Made From High Quality Ingredients Including A Minimum Of 34% Chicken, Hills Science Plan Canine Puppy Large Breed Is Infused With:</p>
              <div class="price py-3 mt-3 mb-3">
               <h3 class="light-primary-color" id="product-price"> {{$product->price}}</h3>
              </div>
             <div class="add-cart">
                <button
                  class="plus-minus-button mx-2"
                  onclick=" minusOne(this)"
                >
                  <i class="bi bi-dash-lg"></i>
                </button>
                <input
                  class="quantity fw-bold text-black"
                  min="0"
                  name="quantity"
                  value="1"
                  type="number"
                  id="product-quantity"
                />
                <button class="plus-minus-button mx-2" onclick=" plusOne(this)">
                  <i class="bi bi-plus"></i>
                </button>
                <button
                  class="btn primary-button mt-md-1 mb-md-2"
                  type="button"
                  id="addToCartButton"
                  onclick="addToCart()"
                >
                  Add To Cart
                </button>
              </div>
              <div class="wishlist-bar d-flex py-3">
                <div class="item d-flex ms-3 me-5">
                  <div class="icon me-2">
                    <i class="bi bi-heart"></i>
                  </div>
                  <div class="text">
                    <span>Add to Wishlist </span>
                  </div>
                </div>
                <div class="item d-flex">
                  <div class="icon me-2">
                    <i class="bi bi-share"></i>
                  </div>
                  <div class="text">
                    <span>Share </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--------------------------------->

        <div class="row d-flex justify-content-center mt-5">
          <div class="tabs my-5">
            <nav>
              <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Additional Information</button>
                <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</button>
                <button class="nav-link" id="nav-brand-tab" data-bs-toggle="tab" data-bs-target="#nav-brand" type="button" role="tab" aria-controls="nav-brand" aria-selected="false">About Brand</button>
                <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping & Delivery</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">Description Section</div>
              <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">Additional Information Section</div>
              <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                <div class="reviews-section py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-7">
                        <h6 class="d-inline fw-bold ">Reviews</h6>
                        <hr>
                        <div class="review-img-rate d-flex align-items-center py-4">
                          <img src="images/images.png" class="rounded me-2" width="100" height="80" alt="...">
                          <div class="d-flex">
                            <div class=" text-warning">
                              <i class="bi bi-star-fill checked fs-6" id="1" onclick="fireStar(this)"></i>
                              <i class="bi bi-star-fill fs-6" id="2" onclick="fireStar(this)"></i>
                              <i class="bi bi-star-fill fs-6" id="3" onclick="fireStar(this)"></i>
                              <i class="bi bi-star-fill fs-6"id="4"  onclick="fireStar(this)"></i>
                              <i class="bi bi-star-fill fs-6" id="5" onclick="fireStar(this)"></i>
                            </div>
                          </div>

                        </div>
                        <div class="review-text py-2">
                          <p>
                            A Wonderful Serenity Has Taken Possession Of My Entire Soul, Like These Sweet Mornings Of Spring Which I Enjoy With My Whole Heart
                          </p>
                        </div>
                        <div class="action-bar d-flex py-2">
                          <div class="item d-flex ms-3 me-5">
                            <div class="icon me-2">
                              <i class="bi bi-hand-thumbs-up"></i>
                            </div>
                            <div class="text">
                              <span>100</span>
                            </div>
                          </div>
                          <div class="item d-flex">
                            <div class="icon me-2">
                              <i class="bi bi-reply"></i>
                            </div>
                            <div class="text">
                              <span>Reply </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-brand" role="tabpanel" aria-labelledby="nav-brand-tab">About Brand</div>
              <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">Shipping & Delivery</div>
            </div>
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
            sibling = sibling.nextSibling;
          }

          return siblings;
        };
        const previousSiblings = (elem) => {
          // create an empty array
          let siblings = [];

          // loop through previous siblings until `null`
          while ((elem = elem.previousElementSibling)) {
            // push sibling to array
            siblings.push(elem);
          }
          return siblings;
        };
        function fireStar(star) {
          let allSiblings = getSiblings(star);
          for (let i = 0; i < allSiblings.length; i++) {
            console.log(allSiblings[i]);
            allSiblings[i].classList.remove("checked");
          }
          let sib = previousSiblings(star);
          counter = star.id;
          star.classList.add("checked");
          for (let i = 0; i < counter - 1; i++) {
            // console.log(sib[i]);
            sib[i].classList.add("checked");
          }
        }
        function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          var imgText = document.getElementById("imgtext");
          expandImg.src = imgs.src;
        }

        function plusOne(plusButton) {
          plusButton.parentNode.querySelector("input[name=quantity]").value =
            Number(
              plusButton.parentNode.querySelector("input[name=quantity]").value
            ) + 1;
        }

        function minusOne(minusButton) {
          minusButton.parentNode.querySelector("input[name=quantity]").value =
            Number(
              minusButton.parentNode.querySelector("input[name=quantity]").value
            ) - 1;
          if (
            minusButton.parentNode.querySelector("input[name=quantity]").value < 0
          ) {
            minusButton.parentNode.querySelector(
              "input[name=quantity]"
            ).value = 0;
          }
        }

        function addToCart() {
          let products = [];
          // Get product information from the page
          var id = {{$product->id}};
          const productID = document.getElementById(id).id;
          const productImage = document.getElementById("expandedImg").src;
          const productName = document.getElementById("product-name").textContent;
          const productQuantity =
            document.getElementById("product-quantity").value;
          const productPrice =
            document.getElementById("product-price").textContent;
          // console.log(productID);
          // console.log(productImage);
          // console.log(productName);
          // console.log(productQuantity);
          // console.log(productPrice);

          // Check if there's an existing cart in local storage
          let cart = JSON.parse(localStorage.getItem("cart"));
          if (!cart) {
            cart = { products: [] };
          }

          const product = {
            id: productID,
            image: productImage,
            name: productName,
            quantity: productQuantity,
            price: productPrice,
          };

          if (cart.products.length == 0) {
            cart.products.push(product);
          } else {
            for (let i = 0; i < cart.products.length; i++) {
              if (cart.products[i].id == product.id) {
                cart.products[i].quantity = Number(cart.products[i].quantity) + Number(product.quantity) ;
                console.log("here");
              } else {
                console.log("hereeeeeee");
                cart.products.push(product);
              }
            }
          }
          localStorage.setItem("cart", JSON.stringify(cart));
        }
      </script>
@endsection

