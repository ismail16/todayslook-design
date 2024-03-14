 <!-- Footer Start -->
 <footer class="footer section-space-mt">
     <div class="footer-newletter">
         <div class="container">
             <div class="row">
                 <div class="text-center footer-news-inner">
                     <div class="footer-news-block">
                         <div class="footer-news-title">Subscribe For Join Us!</div>
                         <div class="subscribe-form">
                             <form id="newsletter-form" name="newsletter-form" method="post" action="#">
                                 <div id="ec_news_signup" class="form">
                                     <input class="email" type="email" required="" placeholder="Enter your email"
                                         name="email" value="" />
                                     <button id="news-btn" class="button btn-secondary" type="submit" name="subscribe"
                                         value="">Subscribe</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-container">
         <div class="footer-top">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12 col-lg-3 footer-contact">
                         <div class="footer-widget">
                             <h4 class="footer-heading">Contact</h4>
                             <div class="footer-links">
                                 <ul class="align-items-center">
                                     <li class="footer-link"><span><i class="ecicon eci-map-marker"></i></span>3
                                         Rosewood Pl Hawker, Australia - 2614</li>
                                     <li class="footer-link"><span><i class="ecicon eci-phone"></i></span><a
                                             href="tel:+919874563210">+0492 911539</a></li>
                                     <li class="footer-link"><span><i class="ecicon eci-envelope"></i></span><a
                                             href="mailto:osman1652@yahoo.com">osman1652@yahoo.com</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-3 footer-info">
                         <div class="footer-widget">
                             <h4 class="footer-heading">Useful links </h4>
                             <div class="footer-links">
                                 <ul class="align-items-center">
                                     <li class="footer-link"><a href="about-us.html">About us</a></li>
                                     <li class="footer-link"><a href="track-order.html">Delivery
                                             Information</a></li>
                                     <li class="footer-link"><a href="privacy-policy.html">Privacy policy</a>
                                     </li>
                                     <li class="footer-link"><a href="terms-condition.html">Terms &
                                             conditions</a>
                                     </li>
                                     <li class="footer-link"><a href="contact-us.html">Contact us</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-3 footer-account">
                         <div class="footer-widget">
                             <h4 class="footer-heading">Account</h4>
                             <div class="footer-links">
                                 <ul class="align-items-center">
                                     <li class="footer-link"><a href="user-profile.html">My Account</a></li>
                                     <li class="footer-link"><a href="track-order.html">Order History</a></li>
                                     <li class="footer-link"><a href="wishlist.html">Wish List</a></li>
                                     <li class="footer-link"><a href="#">Affiliates</a></li>
                                     <li class="footer-link"><a href="#">Newsletter</a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-3 footer-service">
                         <div class="footer-widget">
                             <h4 class="footer-heading">Services</h4>
                             <div class="footer-links">
                                 <ul class="align-items-center">
                                     <li class="footer-link"><a href="terms-condition.html">Terms &
                                             conditions</a>
                                     </li>
                                     <li class="footer-link"><a href="privacy-policy.html">Privacy policy</a>
                                     </li>
                                     <li class="footer-link"><a href="privacy-policy.html">Shipping Policy</a>
                                     </li>
                                     <li class="footer-link"><a href="privacy-policy.html">Return Policy</a>
                                     </li>
                                     <li class="footer-link"><a href="faq.html">FAQ</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 footer-social">
                         <div class="footer-widget">
                             <h4 class="footer-heading">Follow Us</h4>
                             <div class="footer-links">
                                 <ul class="align-items-center">
                                     <li class="footer-link"><a href="#">facebook</a></li>
                                     <li class="footer-link"><a href="#">twitter</a></li>
                                     <li class="footer-link"><a href="#">linkedin</a></li>
                                     <li class="footer-link"><a href="#">instagram</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom">
             <div class="container">
                 <div class="row">
                     <!-- Footer Copyright Start -->
                     <div class="col footer-copy">
                         <div class="footer-bottom-copy ">
                             <div class="copy">© <span id="copyright_year"></span>
                                 <a class="site-name" href="#">PICodeIT</a>. All Rights Reserved.
                             </div>
                         </div>
                     </div>
                     <!-- Footer Copyright End -->
                     <!-- Footer payment -->
                     <div class="col footer-bottom-right">
                         <div class="footer-bottom-payment d-flex justify-content-end">
                             <div class="payment-link">
                                 <img src="{{ asset('frontend/images/icons/payment.png') }}" alt="">
                             </div>

                         </div>
                     </div>
                     <!-- Footer payment -->
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer Area End -->

 <!-- Modal -->
 <div class="modal fade" id="ec_quickview_modal" tabindex="-1">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-5 col-sm-12 col-xs-12">
                         <!-- Swiper -->
                         <div class="qty-product-cover">
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_1.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_3.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="">
                             </div>
                         </div>
                         <div class="qty-nav-thumb">
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_1.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_3.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="">
                             </div>
                             <div class="qty-slide">
                                 <img class="img-responsive"
                                     src="{{ asset('frontend/images/product-image/2_3.jpg') }}" alt="">
                             </div>
                         </div>
                     </div>
                     <div class="col-md-7 col-sm-12 col-xs-12">
                         <div class="quickview-pro-content">
                             <h5 class="quick-title"><a href="product-left-sidebar.html">Trainers GYM
                                     Backpack</a></h5>
                             <div class="quickview-rating">
                                 <i class="ecicon eci-star fill"></i>
                                 <i class="ecicon eci-star fill"></i>
                                 <i class="ecicon eci-star fill"></i>
                                 <i class="ecicon eci-star fill"></i>
                                 <i class="ecicon eci-star"></i>
                             </div>

                             <div class="quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                 typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                 since the 1500s,</div>
                             <div class="quickview-price">
                                 <span class="old-price">$100.00</span>
                                 <span class="new-price">$80.00</span>
                             </div>

                             <div class="pro-variation">
                                 <div class="pro-variation-inner pro-variation-color">
                                     <span>Color</span>
                                     <div class="pro-variation-content">
                                         <ul>
                                             <li><span style="background-color:#696d62;"></span></li>
                                             <li><span style="background-color:#d73808;"></span></li>
                                             <li><span style="background-color:#577023;"></span></li>
                                             <li><span style="background-color:#2ea1cd;"></span></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="pro-variation-inner pro-variation-size">
                                     <span>Size</span>
                                     <div class="pro-variation-content">
                                         <ul>
                                             <li><span>S</span></li>
                                             <li><span>M</span></li>
                                             <li><span>L</span></li>
                                             <li><span>XL</span></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="quickview-qty">
                                 <div class="qty-plus-minus">
                                     <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                 </div>
                                 <div class="quickview-cart ">
                                     <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To
                                         Cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal end -->

 <!-- Add to Cart successfully toast Start -->
 <div id="addtocart_toast" class="addtocart_toast">
     <div class="desc">You Have Add To Cart Successfully</div>
 </div>
 <div id="wishlist_toast" class="wishlist_toast">
     <div class="desc">You Have Add To Wishlist Successfully</div>
 </div>
 <!-- Add to Cart successfully toast end -->


 <div class="float-chat">
     <div class="chat-icon">
         <i class="fi-rr-headset"></i>
     </div>
 </div>
 <!-- Chat Boat end -->

 <!-- Vendor JS -->
 <script src="{{ asset('frontend/js/vendor/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
 <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
 <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
 <script src="{{ asset('frontend/js/vendor/modernizr-3.11.2.min.js') }}"></script>

 <!--Plugins JS-->
 <script src="{{ asset('frontend/js/plugins/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('frontend/js/plugins/scrollup.js') }}"></script>
 <script src="{{ asset('frontend/js/plugins/jquery.zoom.min.js') }}"></script>
 <script src="{{ asset('frontend/js/plugins/slick.min.js') }}"></script>
 <script src="{{ asset('frontend/js/plugins/infiniteslidev2.js') }}"></script>
 <script src="{{ asset('frontend/js/plugins/chat-boat.js') }}"></script>

 <!-- Main Js -->
 <script src="{{ asset('frontend/js/vendor/index.js') }}"></script>
 <script src="{{ asset('frontend/js/demo-2.js') }}"></script>

 </body>

 </html>
