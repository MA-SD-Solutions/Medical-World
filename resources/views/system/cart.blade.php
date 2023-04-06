@extends('system.start')
@section('title', 'Cart')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div class="main-container d-flex justify-content-center my-5">
        <section class="cart-checkout-section rounded-4 bg-white py-2 m-5 w-75">
            <div class="container">
                <div class="row">
                    <!--cart side-->
                    <div class="col-lg-6 col-md-12 col-sm-12 cart">
                        <div class=" rounded-4 h-100" style="background-color: #ebebeb;">
                            <div class="container py-5">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12">
                                  <div class="d-flex mb-4">
                                    <h6 class="fw-normal mb-0 text-black"><i class="bi bi-cart4 me-2"></i>Order Summary</h6>
                                  </div>
                                  <div  id="parentCheck">
                                    @foreach ($carts as $cart )
                                    <div class="card rounded-3 mb-4">
                                        <div class="card-body py-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                          <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img
                                              src="

                                                @if (($cart->offers->isNotEmpty()))
                                                    {{$cart->offers[0]->getFirstMediaUrl('offer_image')}}
                                                @elseif (($cart->products->isNotEmpty()))
                                                    {{$cart->products[0]->getFirstMediaUrl('product_image')}}
                                                @elseif (($cart->services->isNotEmpty()))
                                                    {{$cart->services[0]->getFirstMediaUrl('service_image')}}
                                                @endif

                                              "
                                              class="img-fluid rounded-3">
                                          </div>
                                          <div class="col-md-3 card-info col-lg-3 col-xl-3">
                                            <p class="fw-normal mb-2">

                                                @if (($cart->offers->isNotEmpty()))
                                                    {{$cart->offers[0]->name}}
                                                @elseif (($cart->products->isNotEmpty()))
                                                    {{$cart->products[0]->name}}
                                                @elseif (($cart->services->isNotEmpty()))
                                                    {{$cart->services[0]->name}}
                                                @endif

                                            </p>
                                          </div>
                                          @if (($cart->products->isNotEmpty()))
                                          
                                          <div class="col-md-3 card-info col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                              onclick=" minusOne(this)">
                                              <i class="bi bi-dash-lg"></i>
                                            </button>

                                            <input id="0"  min="0" name="quantity" value="{{$cart->quantity}}" type="number"
                                              class="form-control form-control-sm quantity-input card-info" style="width:55px;" onchange="quantityChange(this)" min="1"/>

                                            <button class="btn btn-link px-2 card-info"
                                              onclick="plusOne(this)">
                                              <i class="bi bi-plus"></i>
                                            </button>
                                          </div>

                                          @else
                                          <div class="col-md-3 card-info col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                              onclick=" minusOne(this)" disabled>
                                              <i class="bi bi-dash-lg"></i>
                                            </button>

                                            <input id="0"  min="0" name="quantity" value="{{$cart->quantity}}" type="number" disabled
                                              class="form-control form-control-sm quantity-input card-info" style="width:55px;" onchange="quantityChange(this)" min="1"/>

                                            <button class="btn btn-link px-2 card-info"
                                              onclick="plusOne(this)" disabled>
                                              <i class="bi bi-plus"></i>
                                            </button>
                                          </div>
                                          @endif
                                          
                                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 card-info">
                                              <span class="d-inline">$</span> <p class="mb-0 item-price d-inline ">
                                                @if (($cart->offers->isNotEmpty()))
                                                {{$cart->offers[0]->value}}
                                            @elseif (($cart->products->isNotEmpty()))
                                                {{$cart->products[0]->price}}
                                            @elseif (($cart->services->isNotEmpty()))
                                                {{$cart->services[0]->price}}
                                            @endif</p>
                                          </div>
                                          <div class="col-md-1 col-lg-1 col-xl-1 text-end card-info">
                                            {{-- <button class="text-danger border-0 bg-transparent" onclick="removeItem(this,${product.id})"><i class="bi bi-trash3"></i></button> --}}
                                            <a href="{{route('carts.destroy',$cart->id)}}" onclick="removeItem(this,{{$cart->id}})" class="text-danger border-0 bg-transparent" ><i class="bi bi-trash3"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach

                                  </div>
                                  <hr>
                                </div>
                               </div>
                               <div id="calculationsDiv">
                                <div class="d-flex justify-content-between px-5">
                                    <span>Subtotal</span>
                                    <p class="me-5" id="subTotal"> 0</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Shipping Fees</span>
                                    <p class="me-5" id="shippingFees"> 0</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Taxes</span>
                                    <p class="me-5" id="taxes"> 0</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <h5>Total with Tax</h5>
                                    <p class="me-5" id="total"> 0</p>
                                </div>
                               </div>
                               <hr>
                               <div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Name</span>
                                    <p class="me-5">{{$user->name}}</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Shipping To</span>
                                    <p class="me-5" > {{$user->address}}</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Phone</span>
                                    <p class="me-5">{{$user->phone}}</p>
                                </div>
                                <div class="d-flex justify-content-between px-5">
                                    <span>Arrived after</span>
                                    <p class="me-5"> 2-4 days</p>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!--checkout side-->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="checkout rounded-4 text-white" style="background-color:#137A7C;">
                                  <div class="row d-flex justify-content-center align-items-center h-100">
                                        <div class="card-body p-4">
                                              <div class="card bg-transparent border-0 text-white">
                                                <div class="card-body">
                                                  <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <h5 class="mb-0">Card details</h5>
                                                  </div>
                                                  <form class="mt-4">
                                                    <div class="form-outline form-white mb-4">
                                                        <label class="form-label fw-lighter" for="typeName">Cardholder's Name</label>
                                                      <input type="text" id="typeName" class="form-control form-control-lg bg-input-color border-0" siez="17"
                                                         />
                                                    </div>
                                                    <div class="form-outline form-white mb-4">
                                                      <label class="form-label fw-lighter" for="typeText">Card Number</label>
                                                      <input type="text" id="typeText" class="form-control form-control-lg bg-input-color border-0" siez="17"
                                                        minlength="19" maxlength="19" />
                                                    </div>

                                                    <div class="row mb-4">
                                                      <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                         <label class="form-label fw-lighter" for="typeExp">Expiration</label>
                                                          <input type="text" id="typeExp" class="form-control form-control-lg bg-input-color border-0"
                                                            size="7" id="exp" minlength="7" maxlength="7" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                          <label class="form-label fw-lighter" for="typeText">Cvv</label>
                                                          <input type="password" id="typeText" class="form-control form-control-lg bg-input-color border-0"
                                                             size="1" minlength="3" maxlength="3" />
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <div class="form-outline form-white mb-4">
                                                        <label class="form-label fw-lighter" for="typeName">Promo Code</label>
                                                        <input type="text" id="typeName" class="form-control form-control-lg bg-input-color border-0" siez="17"
                                                         />
                                                    </div>

                                                    <div class="form-outline form-white mb-4">
                                                        <button class="bg-white w-100 rounded border-0 p-3 fw-bold primary-color mb-3">Use Your Points Now</button>
                                                        <button class="bg-transparent w-100 rounded primary-color p-3 fw-bold" style="border: 1px solid white;">Make Payment</button>
                                                    </div>
                                                  </form>
                                                </div>
                                              </div>
                                        </div>
                                  </div>
                        </div>
                        <a href="{{route('bill.store')}}" class="w-100 rounded  btn btn-secondary primary-color p-3 mt-2  border-0 fw-bold">Proceed With Cash Delivery</a>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        window.onload = function() {
            // displayCart();
            subTotalCalc();
        };
        function quantityChange(changedQuantity){
            subTotalCalc();
        }

        function subTotalCalc(){
            let prices = [];
            let quantities = [];
            let sumRecords = [];
            let totalQuantity = 0;
            prices = document.getElementsByClassName("item-price");
            quantities = document.getElementsByName("quantity");


            for(let i=0; i < prices.length ; i++){
            totalQuantity += (Number(quantities[i].value));
            console.log(totalQuantity);
            localStorage.setItem("totalQuantity", JSON.stringify(totalQuantity));


                let itemRecord = (Number(prices[i].innerHTML)) * (Number(quantities[i].value));
                sumRecords[i] = itemRecord;
            }
            let subTotal = sumRecords.reduce((item1, item2) => item1 + item2, 0);
            document.getElementById("subTotal").innerHTML = subTotal;
            totalCalc(subTotal);
        }

        function plusOne(plusButton){
            plusButton.parentNode.querySelector('input[name=quantity]').value = Number( plusButton.parentNode.querySelector('input[name=quantity]').value) +1;
            quantityChange(plusButton.parentNode.querySelector('input[name=quantity]'));
        }

        function minusOne(minusButton){
            minusButton.parentNode.querySelector('input[name=quantity]').value = Number( minusButton.parentNode.querySelector('input[name=quantity]').value) -1;
            if (minusButton.parentNode.querySelector('input[name=quantity]').value < 0){
              minusButton.parentNode.querySelector('input[name=quantity]').value = 0;
            }
            quantityChange(minusButton.parentNode.querySelector('input[name=quantity]'));
        }

        function totalCalc(subTotal){
            let shippingFees = document.getElementById("shippingFees");
            let taxes = document.getElementById("taxes");
            let total = document.getElementById("total");
            total.innerHTML = Number(shippingFees.innerHTML) + Number(taxes.innerHTML) + subTotal;

        }

        function removeItem(itemButton, id){
          removeFromLocalStorage(id);
            itemButton.parentNode.parentNode.parentNode.parentNode.remove();
            subTotalCalc();
            if(document.getElementById("parentCheck").textContent.trim() == ""){
                document.getElementById("calculationsDiv").style.display = 'none';
            }
        }

        function removeFromLocalStorage(productID){
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            for (let i = 0; i < cart.products.length; i++) {
              if (cart.products[i].id == productID) {
                cart.products.splice(i,1);
                break;
              }
            }
              localStorage.setItem('cart', JSON.stringify(cart));
        }

        // function displayCart() {

        //     let cart = JSON.parse(localStorage.getItem('cart'));

        //     const cartTableBody = document.getElementById('parentCheck');
        //     cart.products.forEach((product) => {
        //         cartTableBody.innerHTML += `
        //         <div class="card rounded-3 mb-4">
        //                               <div class="card-body py-4">
        //                               <div class="row d-flex justify-content-between align-items-center">
        //                                 <div class="col-md-2 col-lg-2 col-xl-2">
        //                                   <img
        //                                     src="${product.image}"
        //                                     class="img-fluid rounded-3">
        //                                 </div>
        //                                 <div class="col-md-3 card-info col-lg-3 col-xl-3">
        //                                   <p class="fw-normal mb-2">${product.name}
        //                                   </p>
        //                                 </div>
        //                                 <div class="col-md-3 card-info col-lg-3 col-xl-2 d-flex">
        //                                   <button class="btn btn-link px-2"
        //                                     onclick=" minusOne(this)">
        //                                     <i class="bi bi-dash-lg"></i>
        //                                   </button>

        //                                   <input id="0"  min="0" name="quantity" value="${product.quantity}" type="number"
        //                                     class="form-control form-control-sm quantity-input card-info" style="width:55px;" onchange="quantityChange(this)" min="1"/>

        //                                   <button class="btn btn-link px-2 card-info"
        //                                     onclick="plusOne(this)">
        //                                     <i class="bi bi-plus"></i>
        //                                   </button>
        //                                 </div>
        //                                 <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 card-info">
        //                                     <span class="d-inline">$</span> <p class="mb-0 item-price d-inline ">${product.price}</p>
        //                                 </div>
        //                                 <div class="col-md-1 col-lg-1 col-xl-1 text-end card-info">
        //                                   <button class="text-danger border-0 bg-transparent" onclick="removeItem(this,${product.id})"><i class="bi bi-trash3"></i></button>
        //                                 </div>
        //                               </div>
        //                             </div>
        //                             </div>
        //                             `
        //     });
        //  }


      </script>

@endsection

