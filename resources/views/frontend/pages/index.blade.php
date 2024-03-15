@extends('frontend.layouts.master')
@section('title', "Home | Today's Look Australia")

@section('main')
    <!-- Banner Section Start -->
    <section class="banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- Banners Start -->
            <div class="banner-inner">
                <!--ec Banner Start -->
                <div class="banner-block banner-block-2">
                    <div class="row">
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                            <div class="bnr-overlay">
                                <img src="{{ asset('frontend/images2/banner/2.jpg') }}" alt="" />
                                <div class="banner-text">
                                    <span class="banner-stitle">New Arrivals</span>
                                    <span class="banner-title">mens<br> Sport shoes</span>
                                    <span class="banner-discount">30% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-btn"><a href="{{ route('single_product') }}">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                            <div class="bnr-overlay">
                                <img src="{{ asset('frontend/images2/banner/3.jpg') }}" alt="" />
                                <div class="banner-text">
                                    <span class="banner-stitle">New Trending</span>
                                    <span class="banner-title">Smart<br> watches</span>
                                    <span class="banner-discount">Buy any 3 Items & get <br>20% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-btn"><a href="{{ route('single_product') }}">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Banner End -->
                </div>
                <!-- Banners End -->
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section fre-spe-section section-space-p" id="offers">
        <div class="container">
            <div class="row">
                <!--  Feature Section Start -->
                <div class="fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30" data-animation="slideInRight">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="bg-title">Feature Items</h2>
                            <h2 class="ec-title">Feature Items</h2>
                        </div>
                    </div>

                    <div class="fre-products">
                        <div class="fs-product">
                            <div class="fs-pro-inner">
                                <div class="fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/images2/product-image/1_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="fs-pro-title"><a href="product-left-sidebar.html">Baby Toy
                                            Teddybear</a>
                                    </h5>
                                    <div class="fs-pro-rating">
                                        <span class="fs-rating-icon">
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star"></i>
                                        </span>
                                        <span class="fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="fs-price">
                                        <span class="old-price">$549.00</span>
                                        <span class="new-price">$480.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="fs-count-1"></span></div>
                                    <div class="fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-product">
                            <div class="fs-pro-inner">
                                <div class="fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/images2/product-image/3_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="fs-pro-title"><a href="product-left-sidebar.html">Leather Purse For
                                            Women</a>
                                    </h5>
                                    <div class="fs-pro-rating">
                                        <span class="fs-rating-icon">
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                        </span>
                                        <span class="fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="fs-count-2"></span></div>
                                    <div class="fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Feature Section End -->
                <!--  Special Section Start -->
                <div class="spe-section col-lg-6 col-md-6 col-sm-6" data-animation="slideInLeft">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="bg-title">Limited Time Offer</h2>
                            <h2 class="ec-title">Limited Time Offer</h2>
                        </div>
                    </div>

                    <div class="spe-products">
                        <div class="fs-product">
                            <div class="fs-pro-inner">
                                <div class="fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/images2/product-image/8_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="fs-pro-title"><a href="product-left-sidebar.html">Smart watch
                                            Firebolt</a>
                                    </h5>
                                    <div class="fs-pro-rating">
                                        <span class="fs-rating-icon">
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star"></i>
                                        </span>
                                        <span class="fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="fs-price">
                                        <span class="old-price">$200.00</span>
                                        <span class="new-price">$180.00</span>
                                    </div>
                                    <div class="countdowntimer"><span id="fs-count-3"></span></div>
                                    <div class="fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-product">
                            <div class="fs-pro-inner">
                                <div class="fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/images2/product-image/10_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="fs-pro-title"><a href="product-left-sidebar.html">Casual Shoes Men</a>
                                    </h5>
                                    <div class="fs-pro-rating">
                                        <span class="fs-rating-icon">
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                            <i class="icon i-star fill"></i>
                                        </span>
                                        <span class="fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="fs-count-4"></span></div>
                                    <div class="fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Special Section End -->
            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!--  offer Section Start -->
    <section class="section offer-section section-space-p section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center offer-content">
                    <h2 class="offer-title">Sunglasses</h2>
                    <h3 class="offer-stitle" data-animation="slideInDown">Super Offer</h3>
                    <span class="offer-img" data-animation="zoomIn"><img
                            src="{{ asset('frontend/images2/offer-image/1.png') }}" alt="offer image" /></span>
                    <span class="offer-desc">Acetate Frame Sunglasses</span>
                    <span class="offer-price">$40.00 Only</span>
                    <a class="btn btn-primary" href="shop-left-sidebar-col-3.html" data-animation="zoomIn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!--  Top Vendor Section Start -->
    <section class="section section-space-p" id="vendors">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="bg-title">Top Vendor</h2>
                        <h2 class="ec-title">Top Vendor</h2>
                        <p class="sub-title">Browse The Collection of <a href="catalog-multi-vendor.html">All
                                Vendors.</a></p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-t-15 margin-minus-b-15">
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="vendor-card">
                        <div class="vendor-detail">
                            <div class="vendor-avtar">
                                <img src="{{ asset('frontend/images2/vendor/2.jpg') }}" alt="vendor img">
                            </div>
                            <div class="vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Marvelus</a>
                                <p class="prod-count">154 Products</p>
                                <div class="pro-rating">
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 954</p>
                                </div>
                            </div>
                        </div>
                        <div class="vendor-prod">
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/1_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/2_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/3_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/4_1.jpg') }}" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="vendor-card">
                        <div class="vendor-detail">
                            <div class="vendor-avtar">
                                <img src="{{ asset('frontend/images2/vendor/3.jpg') }}" alt="vendor img">
                            </div>
                            <div class="vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Oreva Fashion</a>
                                <p class="prod-count">546 Products</p>
                                <div class="pro-rating">
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 785</p>
                                </div>
                            </div>
                        </div>
                        <div class="vendor-prod">
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/5_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/6_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/7_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/8_1.jpg') }}" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="vendor-card">
                        <div class="vendor-detail">
                            <div class="vendor-avtar">
                                <img src="{{ asset('frontend/images2/vendor/4.jpg') }}" alt="vendor img">
                            </div>
                            <div class="vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Cenva Art</a>
                                <p class="prod-count">854 Products</p>
                                <div class="pro-rating">
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star"></i>
                                    <i class="icon i-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 587</p>
                                </div>
                            </div>
                        </div>
                        <div class="vendor-prod">
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/9_1.jpg') }}" alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/10_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/11_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/12_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="vendor-card">
                        <div class="vendor-detail">
                            <div class="vendor-avtar">
                                <img src="{{ asset('frontend/images2/vendor/5.jpg') }}" alt="vendor img">
                            </div>
                            <div class="vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Neon Fashion</a>
                                <p class="prod-count">154 Products</p>
                                <div class="pro-rating">
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                    <i class="icon i-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 354</p>
                                </div>
                            </div>
                        </div>
                        <div class="vendor-prod">
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/13_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/14_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/15_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/images2/product-image/16_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Top Vendor Section End -->

    <section class="labels section-space-p">
        <div class="container">
            <div class="line-offer" style="background-image: url('frontend/images2/offer-image/offer-banner-06.jpg');">
                <div class="line-offer-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>On Furniture</h6>
                                <h2 class="offer-upto">Upto <span>45%</span> OFF</h2>
                                <p class="offer-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's.</p>
                                <div class="offer-btn"><a class="btn-shop-now" contenteditable="false"
                                        style="cursor: pointer;">SHOP NOW!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  services Section Start -->
    <section class="section services-section section-space-p" id="services">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="service-desc">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="service-desc">
                            <h2>24X7 Support</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-badge-percent"></i>
                        </div>
                        <div class="service-desc">
                            <h2>30 Days Return</h2>
                            <p>Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="service-desc">
                            <h2>Payment Secure</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!--  offer Section Start -->
    <section class="section offer-section section-space-p section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center offer-content">
                    <h2 class="offer-title">Sunglasses</h2>
                    <h3 class="offer-stitle" data-animation="slideInDown">Super Offer</h3>
                    <span class="offer-img" data-animation="zoomIn"><img
                            src="{{ asset('frontend/images2/offer-image/1.png') }}" alt="offer image" /></span>
                    <span class="offer-desc">Acetate Frame Sunglasses</span>
                    <span class="offer-price">$40.00 Only</span>
                    <a class="btn btn-primary" href="shop-left-sidebar-col-3.html" data-animation="zoomIn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- New Product Start -->
    <section class="section new-product section-space-p" id="arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  product-content" data-animation="flipInY">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/9_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/9_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="pro-actions">
                                    <a href="compare.html" class="btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Full Sleeve Cap T-Shirt</a>
                            </h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <span class="price">
                                <span class="old-price">$20.00</span>
                                <span class="new-price">$15.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/9_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/9_1.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#74c7ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/9_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/9_2.jpg') }}"
                                                data-tooltip="Green"><span style="background-color:#7af6ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#85ffeb;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="pro-size">
                                    <span class="pro-opt-label">Size</span>
                                    <ul class="opt-size">
                                        <li class="active"><a href="#" class="opt-sz" data-old="$20.00"
                                                data-new="$15.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$22.00" data-new="$17.00"
                                                data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$25.00" data-new="$20.00"
                                                data-tooltip="Large">X</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$27.00" data-new="$22.00"
                                                data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  product-content" data-animation="flipInY">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/11_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/11_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="pro-actions">
                                    <a href="compare.html" class="btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Classic Leather purse</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <span class="price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/11_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/11_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/11_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/11_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#ff4a77;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/11_3.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/11_3.jpg') }}"
                                                data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/11_4.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/11_4.jpg') }}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#ffcc5e;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  product-content" data-animation="flipInY">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/12_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/12_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="percentage">5%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="pro-actions">
                                    <a href="compare.html" class="btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Fancy Ladies Sandal</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <span class="price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/12_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/12_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/12_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/12_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#00ffff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/12_3.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/12_3.jpg') }}"
                                                data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/12_4.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/12_4.jpg') }}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#89ff7e;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="pro-size">
                                    <span class="pro-opt-label">Size</span>
                                    <ul class="opt-size">
                                        <li class="active"><a href="#" class="opt-sz" data-old="$50.00"
                                                data-new="$40.00" data-tooltip="Small">6</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$60.00" data-new="$50.00"
                                                data-tooltip="Medium">7</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$70.00" data-new="$60.00"
                                                data-tooltip="Large">8</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$80.00" data-new="$70.00"
                                                data-tooltip="Extra Large">9</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  product-content" data-animation="flipInY">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/13_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/13_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="pro-actions">
                                    <a href="compare.html" class="btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Womens Leather Backpack</a>
                            </h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <span class="price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/13_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/13_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/13_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/13_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#ffcdbe;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/13_3.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/13_3.jpg') }}"
                                                data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/13_4.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/13_4.jpg') }}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#dd9bfc;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->

    <!-- testmonial Start -->
    <section class="section test-section section-space-ptb-100 section-space-m" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="bg-title">Testimonial</h2>
                        <h2 class="ec-title">Client Review</h2>
                        <p class="sub-title mb-3">What say client about us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="test-outer">
                    <ul id="testimonial-slider">
                        <li class="test-item">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images2/testimonial/1.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="test-name">John Doe</div>
                                    <div class="test-designation">General Manager</div>
                                    <div class="test-rating">
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                        <li class="test-item ">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images2/testimonial/2.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="test-name">John Doe</div>
                                    <div class="test-designation">General Manager</div>
                                    <div class="test-rating">
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                        <li class="test-item">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images2/testimonial/3.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="test-name">John Doe</div>
                                    <div class="test-designation">General Manager</div>
                                    <div class="test-rating">
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                        <i class="icon i-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- testmonial end -->

    <!-- Brand Section Start -->
    <section class="section brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="brand-outer">
                    <ul id="brand-slider">
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/1.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/2.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/3.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/4.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/5.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/6.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/7.png') }}" /></a></div>
                        </li>
                        <li class="brand-item" data-animation="zoomIn">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images2/brand-image/8.png') }}" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section End -->

    <!-- Instagram Start -->
    <section class="section instagram-section module section-space-p" id="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="bg-title">Instagram Feed</h2>
                        <h2 class="ec-title">Instagram Feed</h2>
                        <p class="sub-title">Share your store with us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="insta-wrapper">
            <div class="insta-outer">
                <div class="container" data-animation="fadeIn">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/1.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/2.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/3.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/4.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/5.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/6.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="insta-item">
                            <div class="insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('frontend/images2/instragram-image/7.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram End -->





@endsection
