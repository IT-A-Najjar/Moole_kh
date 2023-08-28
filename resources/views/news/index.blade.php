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
                   <br>
                   @if(auth()->user())
                       <h4><a href="./news/create"  style="color: #dc3545;">اضافة خبر</a></h4>
                   @endif
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
                           <h5>Site manager</h5>
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
             @foreach($newss as $news)
                 <div class="col-lg-8">
               <div class="blog__details__content">
                  <div class="blog__details__text">
                     <h2>{{$news->title}}</h2>
                     <br>
                      <p>{{$news->content}}</p>
                  </div>
                   @foreach($comments as $commnt)
                       @if($commnt->news_id == $news->id)
                      <div class="blog__details__quote">
                         <i class="fa fa-quote-left"></i>
                         <p>“{{$commnt->content}}”</p>
                         <h6>_ {{$commnt->name}} _</h6>
                      </div>
                       @endif
                   @endforeach
                  <div class="blog__details__comment">

                      <p class="d-inline-flex gap-1 ">
                          <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Add a comment
                          </button>
                      </p>
                      <div class="collapse" id="collapseExample">
                          <h4>Add a comment</h4>
                          <form method="POST" action="{{route('comment.store')}}">
                              @csrf
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 d-none">
                                      <input type="text" placeholder="Name" name="news_id" value="{{$news->id}}">
                                  </div>
                                  <div class="col-lg-4 col-md-4">
                                      <input type="text" placeholder="Name" name="name">
                                  </div>
                                  <div class="col-lg-4 col-md-4">
                                      <input type="text" placeholder="Email" name="email">
                                  </div>
                                  <div class="col-lg-4 col-md-4">
                                      <input type="text" placeholder="Phone" name="phone">
                                  </div>
                                  <div class="col-lg-12 text-center">
                                      <textarea placeholder="Comment" name="content"></textarea>
                                      <button type="submit" class="site-btn">Post Comment</button>
                                  </div>
                              </div>
                          </form>
                      </div>

                  </div>
               </div>
            </div>
             @endforeach
         </div>
      </div>
   </section>
</x-app-layout>
