<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="Male_Fashion Template">
   <meta name="keywords" content="Male_Fashion, unica, creative, html">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

   <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
   <link rel="stylesheet" href="css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <style>
        /* Apply Nucleo font using font-family */
        body {
            font-family: "Nucleo";
        }
    </style>
</head>

<body>
   <!-- Page Preloder -->
   <div id="preloder">
      <div class="loader"></div>
   </div>

   <!-- Offcanvas Menu Begin -->
   <div class="offcanvas-menu-overlay"></div>
   <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
         <div class="offcanvas__links">
            <a href="#">Sign in</a>
            <a href="#">FAQs</a>
         </div>
         <div class="offcanvas__top__hover">
            <span>Usd <i class="arrow_carrot-down"></i></span>
            <ul>
               <li>USD</li>
               <li>EUR</li>
               <li>USD</li>
            </ul>
         </div>
      </div>
      <div class="offcanvas__nav__option">
         <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
         <a href="#"><img src="img/icon/heart.png" alt=""></a>
         <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
         <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
         <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
   </div>
   <!-- Offcanvas Menu End -->

   <!-- Header Section Begin -->
   <header class="header">
      <div class="header__top">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7">
                  <div class="header__top__left">
                     <p>Free shipping, 30-day return or refund guarantee.</p>
                  </div>
               </div>
               @if (Route::has('login'))
               @auth
               <div class="col-lg-6 col-md-5">
                  <div class="header__top__right">
                     <div class="header__top__links">
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf

                           <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                              {{ __('Log Out') }}
                           </x-responsive-nav-link>
                        </form>
                     </div>
                  </div>
               </div>
               @endauth
               @endif
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-3">
               <div class="header__logo">
                  <a href="./index.html"><img src="img/logo.png" alt=""></a>
               </div>
            </div>
            <div class="col-lg-7 col-md-7">
               <nav class="header__menu mobile-menu">
                  <ul>
                     <li class="active"><a href="./">Home</a></li>
                     <li><a href="./shop">Shop</a></li>
                     <li><a href="#">Pages</a>
                        <ul class="dropdown">
                           <li><a href="./about">About Us</a></li>
                           <li><a href="./shop-details">Shop Details</a></li>
                           <li><a href="./shopping-cart">Shopping Cart</a></li>
                           <li><a href="./checkout">Check Out</a></li>
                           <li><a href="./blog">Blog</a></li>
                           <li><a href="./offers">Offers</a></li>
                           <li><a href="./news">News</a></li>
                        </ul>
                     </li>
                     <li><a href="./contact">Contacts</a></li>
                     @if (Route::has('login'))
                     @auth
                     <li><a href="#">Management</a>
                        <ul class="dropdown">
                           <li><a href="{{ url('/profile') }}">Profile</a></li>
                           <li><a href="./category">All Categories</a></li>
                           <!-- <li><a href="./category/create">Create Category</a></li> -->
                           <li><a href="./product/create">Create Product</a></li>
                           <li><a href="./product">Blog</a></li>
                        </ul>
                     </li>
                     @else
                     <li><a href="{{ route('login') }}">Log in</a></li>

                     @if (Route::has('register'))
                     <li><a href="{{ route('register') }}">Register</a></li>
                     @endif
                     @endauth
                     @endif
                  </ul>
               </nav>
            </div>
            <div class="col-lg-2 col-md-2">
               <div class="header__nav__option">
                  <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                  <div class="price">$0.00</div>
               </div>
            </div>
         </div>
         <div class="canvas__open"><i class="fa fa-bars"></i></div>
      </div>
   </header>
   <!-- Page Heading -->
   <div class="continer">
      {{ $slot }}
   </div>
   <!-- Footer Section Begin -->
   <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="footer__about">
                  <div class="footer__logo">
                     <a href="#"><img src="img/footer-logo.png" alt=""></a>
                  </div>
                  <p>The customer is at the heart of our unique business model, which includes design.</p>
                  <a href="#"><img src="img/payment.png" alt=""></a>
               </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
               <div class="footer__widget">
                  <h6>Shopping</h6>
                  <ul>
                     <li><a href="#">Clothing Store</a></li>
                     <li><a href="#">Trending Shoes</a></li>
                     <li><a href="#">Accessories</a></li>
                     <li><a href="#">Sale</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
               <div class="footer__widget">
                  <h6>Shopping</h6>
                  <ul>
                     <li><a href="#">Contact Us</a></li>
                     <li><a href="#">Payment Methods</a></li>
                     <li><a href="#">Delivary</a></li>
                     <li><a href="#">Return & Exchanges</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
               <div class="footer__widget">
                  <h6>NewLetter</h6>
                  <div class="footer__newslatter">
                     <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                     <form action="#">
                        <input type="text" placeholder="Your email">
                        <button type="submit"><span class="icon_mail_alt"></span></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="footer__copyright__text">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  <p>Copyright ©
                     <script>
                        document.write(new Date().getFullYear());
                     </script>
                     All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a>Khawla</a> | <a>Bayan</a> | <a>Raghd</a> | <a>Lila</a>
                  </p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Section End -->

   <!-- Search Begin -->
   <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch">+</div>
         <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
         </form>
      </div>
   </div>
   <!-- Search End -->

   <!-- Js Plugins -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/jquery.nicescroll.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/jquery.countdown.min.js"></script>
   <script src="js/jquery.slicknav.js"></script>
   <script src="js/mixitup.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>
