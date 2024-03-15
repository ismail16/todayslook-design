 <!-- Header Top Start -->
 <div class="header-top">
     <div class="container">
         <div class="row align-items-center">
             <!-- Header Top social Start -->
             <div class="col text-left header-top-left d-none d-lg-block">
                 <div class="header-top-social">
                     <span class="social-text text-upper">Follow us on:</span>
                     <ul class="mb-0">
                         <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                     class="icon i-facebook"></i></a></li>
                         <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                     class="icon i-twitter"></i></a></li>
                         <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                     class="icon i-instagram"></i></a></li>
                         <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                     class="icon i-linkedin"></i></a></li>
                     </ul>
                 </div>
             </div>
             <!-- Header Top social End -->
             <!-- Header Top Message Start -->
             <div class="col text-center header-top-center">
                 <div class="header-top-message text-upper">
                     <span>Free Shipping</span>This Week Order Over - $75
                 </div>
             </div>
             <!-- Header Top Message End -->
             <!-- Header Top Language Currency -->
             <div class="col header-top-right d-none d-lg-block">
                 <div class="header-top-lan-curr d-flex justify-content-end">
                     <div class="header-top-curr dropdown">
                         <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Blogs</button>
                     </div>
                     <!-- Currency Start -->
                     <div class="header-top-curr dropdown">
                         <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                 class="icon i-caret-down" aria-hidden="true"></i></button>
                         <ul class="dropdown-menu">
                             <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                             <li><a class="dropdown-item" href="#">EUR €</a></li>
                         </ul>
                     </div>
                     <!-- Currency End -->
                     <!-- Language Start -->
                     <div class="header-top-lan dropdown">
                         <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                 class="icon i-caret-down" aria-hidden="true"></i></button>
                         <ul class="dropdown-menu">
                             <li class="active"><a class="dropdown-item" href="#">English</a></li>
                             <li><a class="dropdown-item" href="#">Italiano</a></li>
                         </ul>
                     </div>
                     <!-- Language End -->

                 </div>
             </div>
             <!-- Header Top Language Currency -->
             <!-- Header Top responsive Action -->
             <div class="col d-lg-none ">
                 <div class="header-bottons">
                     <!-- Header User Start -->
                     <div class="header-user dropdown">
                         <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                         <ul class="dropdown-menu dropdown-menu-right">
                             <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                             <li><a class="dropdown-item" href="#">Checkout</a></li>
                             <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                         </ul>
                     </div>
                     <!-- Header User End -->
                     <!-- Header Cart Start -->
                     <a href="wishlist.html" class="header-btn header-wishlist">
                         <div class="header-icon"><i class="fi-rr-heart"></i></div>
                         <span class="header-count">4</span>
                     </a>
                     <!-- Header Cart End -->
                     <!-- Header Cart Start -->
                     <a href="#side-cart" class="header-btn side-toggle">
                         <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                         <span class="header-count cart-count-lable">3</span>
                     </a>
                     <!-- Header Cart End -->
                     <a href="javascript:void(0)" class="header-btn sidebar-toggle">
                         <i class="fi fi-rr-apps"></i>
                     </a>
                     <!-- Header menu Start -->
                     <a href="#mobile-menu" class="header-btn side-toggle d-lg-none">
                         <i class="fi fi-rr-menu-burger"></i>
                     </a>
                     <!-- Header menu End -->
                 </div>
             </div>
             <!-- Header Top responsive Action -->
         </div>
     </div>
 </div>

 <!-- Header Bottom  Start -->
 <div class="header-bottom d-none d-lg-block">
     <div class="container position-relative">
         <div class="row">
             <div class="flex">
                 <!-- Header Logo Start -->
                 <div class="align-self-center">
                     <div class="header-logo">
                         <a href="{{ '/' }}">
                             <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Site Logdddo" />
                             <img class="dark-logo" src="{{ asset('frontend/images/logo/dark-logo.png') }}"
                                 alt="Site Logo" style="display: none;" />
                         </a>
                     </div>
                 </div>
                 <!-- Header Logo End -->

                 <!-- Header Search Start -->
                 <div class="align-self-center">
                     <div class="header-search">
                         <form class="btn-group-form" action="#">
                             <input class="form-control search-bar" placeholder="Search products..." type="text">
                             <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                         </form>
                     </div>
                 </div>
                 <!-- Header Search End -->

                 <!-- Header Button Start -->
                 <div class="align-self-center">
                     <div class="header-bottons">

                         <!-- Header User Start -->
                         <div class="header-user dropdown">
                             <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                     class="fi-rr-user"></i></button>
                             <ul class="dropdown-menu dropdown-menu-right">
                                 <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                 <li><a class="dropdown-item" href="#">Checkout</a></li>
                                 <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                             </ul>
                         </div>
                         <!-- Header User End -->
                         <!-- Header wishlist Start -->
                         <a href="wishlist.html" class="header-btn header-wishlist">
                             <div class="header-icon"><i class="fi-rr-heart"></i></div>
                             <span class="header-count">4</span>
                         </a>
                         <!-- Header wishlist End -->
                         <!-- Header Cart Start -->
                         <a href="#side-cart" class="header-btn side-toggle">
                             <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                             <span class="header-count cart-count-lable">3</span>
                         </a>
                         <!-- Header Cart End -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Header Button End -->
 <!-- Header Top  End -->
