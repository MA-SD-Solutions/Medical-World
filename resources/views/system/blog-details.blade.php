@extends('system.start')
@section('title', 'Product-details')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
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
                    <img src="{{asset('asset/dist/img/slide-1.png')}}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset/dist/img/slide-2.png')}}" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>
    </div>

    <div class="specialties d-flex justify-content-center align-items-center flex-column">
        <div class="specialties-container d-flex justify-content-center align-items-center flex-column">
            <div class="container">
                <h6 class="text-center pt-2">
                    Choose from Services by specialties
                </h6>
                <div class="row">
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-capsule-pill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"
                      />
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7"> specialty-1 </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-capsule-pill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"
                      />
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7"> specialty-2 </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-capsule-pill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"
                      />
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7"> specialty-3 </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-capsule-pill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"
                      />
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7"> specialty-4 </span>
                        </div>
                    </div>
                    <div class="col text-center d-flex justify-content-center align-items-center flex-column">
                        <div class="specialty-icon rounded-circle border mt-2">
                            <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-capsule-pill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"
                      />
                    </svg>
                  </span>
                        </div>
                        <div class="specialty-title mt-2">
                            <span class="fs-7"> specialty-5 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product pb-5" id="0">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-sm-12">
                <h3 class="mb-3 text-center" id="blog-name">{{$blog->title}}</h3>
                <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
                    <div class="row py-2 shadow-5">
                        <div class="col-12">
                            <div class="lightbox ">
                                <img src="{{$blog->getFirstMediaUrl('blog_image') }}" alt="Gallery image 1" class="ecommerce-gallery-main-img rounded w-100" height="400" id="expandedImg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-10 col-sm-10">
                <div class="product-details">
                    <div class="wishlist-bar d-flex pb-3 mb-3">
                        <div class="item d-flex  me-5">
                            <div class="icon me-2">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="text">
                                <span>Created By: {{$blog->users->name}} </span>
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
                    <h3 class="d-inline pt-3">Description</h3>
                    <hr />
                    <p>
                    {{$blog->description}}
                    </p>


                </div>
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
        const productID = document.getElementById("0").id;
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
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

@endsection
