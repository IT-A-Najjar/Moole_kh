<x-app-layout>
   <!-- Blog Details Hero Begin -->
   <section class="blog-hero spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
               <div class="blog__hero__text">
                  <h2>العروض والخصومات المتاحة خلال الشهر الحالي ضمن متاجرنا</h2>
                  <ul>
                     <li>By Deercreative</li>
                     <li>{{now()}}</li>
                     <li>8 Comments</li>
                  </ul>
                  <br>
                   @if(auth()->user()->is_admin)
                       <h4><a href="./offer/create"  style="color: #dc3545;">اضافة خصومات</a></h4>
                   @endif
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Blog Details Hero End -->

   <!-- Blog Details Section Begin -->
   <section class="blog-details spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
               <div class="blog__details__pic">
                  <img src="img/instagram/instagram-1.jpg" alt="">
               </div>
            </div>
            <div class="col-lg-8">
               <div class="blog__details__content">
                  <div class="blog__details__share">
                     <span>share</span>
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                   @foreach($offers as $offer)
                       @if($offer->expiry_date>now())
                           <div class="blog__details__option">
                               <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                       <div class="blog__details__author">
                                           <div class="blog__details__author__pic">
                                               <img src="img/blog/details/blog-author.jpg" alt="">
                                           </div>
                                           <div class="blog__details__author__text">
                                               <h5>Moole Admin</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                       <div class="blog__details__tags">
                                           <a href="{{route('offer.edit',$offer->id)}}">{{$offer->offer_type}}</a>
                                           <a href="{{route('offer.edit',$offer->id)}}">{{$offer->discount_value}}</a>
                                           <a href="{{route('offer.edit',$offer->id)}}">{{$offer->expiry_date}}</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                          <div class="blog__details__text">
                             <p>{{$offer->offer_des}}</p>
                              <div class="text-center placeholder-wave position-relative py-2 px-4 text-bg-secondary border border-secondary rounded-pill">
                                      <a href="{{route('customer.index',$offer->id)}}" class="text-white" aria-disabled="true">.. شراء الان</a>
                              </div>
                          </div>
                       @endif
                   @endforeach
                  <div class="blog__details__comment">
                     <h4>Leave A Comment</h4>
                     <form action="#">
                        <div class="row">
                           <div class="col-lg-4 col-md-4">
                              <input type="text" placeholder="Name">
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <input type="text" placeholder="Email">
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <input type="text" placeholder="Phone">
                           </div>
                           <div class="col-lg-12 text-center">
                              <textarea placeholder="Comment"></textarea>
                              <button type="submit" class="site-btn">Post Comment</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Blog Details Section End -->

</x-app-layout>
