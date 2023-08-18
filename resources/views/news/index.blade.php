<x-app-layout>
   <section class="blog-hero spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
               <div class="blog__hero__text">
                  <h2>اخر الاخبار</h2>
                  <ul>
                     <li>By Deercreative</li>
                     <li>{{now()}}</li>
                     <li>8 Comments</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="blog-details spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="blog__details__author">
                        <div class="blog__details__author__pic">
                           <img src="img/blog/details/blog-author.jpg" alt="">
                        </div>
                        <div class="blog__details__author__text">
                           <h5>Aiden Blair</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="blog__details__tags">
                        <a href="#">#Fashion</a>
                        <a href="#">#Trending</a>
                        <a href="#">#2020</a>
                     </div>
                  </div>
               </div>
               <div class="blog__details__option"></div>
               <div class="blog__details__pic">
                  <img src="img/instagram/instagram-1.jpg" alt="">
               </div>
            </div>
            <div class="col-lg-8">
               <div class="blog__details__content">
                  <div class="blog__details__text">
                     <h2>title news</h2>
                     <br>
                     <p>Hydroderm is the highly desired anti-aging cream on the block. This serum restricts the
                        occurrence of early aging sings on the skin and keeps the skin younger, tighter and
                        healthier. It reduces the wrinkles and loosening of skin. This cream nourishes the skin
                        and brings back the glow that had lost in the run of hectic years.</p>
                     <p>The most essential ingredient that makes hydroderm so effective is Vyo-Serum, which is a
                        product of natural selected proteins. This concentrate works actively in bringing about
                        the natural youthful glow of the skin. It tightens the skin along with its moisturizing
                        effect on the skin. The other important ingredient, making hydroderm so effective is
                        “marine collagen” which along with Vyo-Serum helps revitalize the skin.</p>
                  </div>
                  <div class="blog__details__quote">
                     <i class="fa fa-quote-left"></i>
                     <p>“When designing an advertisement for a particular product many things should be
                        researched like where it should be displayed.”</p>
                     <h6>_ John Smith _</h6>
                  </div>
                  
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
</x-app-layout>