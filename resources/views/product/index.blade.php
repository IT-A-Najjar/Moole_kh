<x-app-layout>
   <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-option">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb__text">
                  <h4>All products</h4>
                  <div class="breadcrumb__links">
                     <a href="./index.html">Home</a>
                     <span>Products</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Shop Section Begin -->
   <section class="shop spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="shop__product__option">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__product__option__left">
                           <p>Filter</p>
                           <div class="form-floating">
                              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__product__option__right">
                           <p>Sort by Price:</p>
                           <select>
                              <option value="">Low To High</option>
                              <option value="">$0 - $55</option>
                              <option value="">$55 - $100</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  @foreach($products as $product)
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                           <ul class="product__hover">
                              <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                              <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                              </li>
                              <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                           </ul>
                        </div>
                        <div class="product__item__text">
                           <h6>{{$product->name}}</h6>
                           <a href="#" class="add-cart">+ Add Specification</a>
                           <h5>${{$product->price}}</h5>

                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Shop Section End -->
</x-app-layout>