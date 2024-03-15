@extends('frontend.layouts.master')
@section('title', "Home | Today's Look Australia")

@section('main')
    <!-- breadcrumb start -->
    <div class="sticky-header-next-sec  breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="breadcrumb-title">Single Product</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Single Product</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- Sart Single product -->
    <section class="page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="pro-rightside common-rightside col-lg-9 col-md-12">
                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('frontend/images2/product-image/9_3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="single-title">Unisex Cotton Neck Hoodie</h5>
                                        <div class="single-rating-wrap">
                                            <div class="single-rating">
                                                <i class="icon i-star fill"></i>
                                                <i class="icon i-star fill"></i>
                                                <i class="icon i-star fill"></i>
                                                <i class="icon i-star fill"></i>
                                                <i class="icon i-star-o"></i>
                                            </div>
                                            <span class="read-review"><a href="#spt-nav-review">Be the first to
                                                    review this product</a></span>
                                        </div>
                                        <div class="single-desc">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1990</div>

                                        <div class="single-sales">
                                            <div class="single-sales-inner">
                                                <div class="single-sales-title">sales accelerators</div>
                                                <div class="single-sales-visitor">real time <span>18</span> visitor
                                                    right now!</div>
                                                <div class="single-sales-progress">
                                                    <span class="single-progress-desc">Hurry up!left 17 in
                                                        stock</span>
                                                    <span class="single-progressbar"></span>
                                                </div>
                                                <div class="single-sales-countdown">
                                                    <div class="single-countdown"><span id="single-countdown"></span>
                                                    </div>
                                                    <div class="single-count-desc">Time is Running Out!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-price-stoke">
                                            <div class="single-price">
                                                <span class="single-ps-title">As low as</span>
                                                <span class="new-price">$68.00</span>
                                            </div>
                                            <div class="single-stoke">
                                                <span class="single-ps-title">IN STOCK</span>
                                                <span class="single-sku">SKU#: WH12</span>
                                            </div>
                                        </div>

                                        <div class="pro-variation">
                                            <div class="pro-variation-inner pro-variation-size">
                                                <span>SIZE</span>
                                                <div class="pro-variation-content">
                                                    <ul>
                                                        <li class="active"><span>S</span></li>
                                                        <li><span>M</span></li>
                                                        <li><span>L</span></li>
                                                        <li><span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pro-variation-inner pro-variation-color">
                                                <span>Color</span>
                                                <div class="pro-variation-content">
                                                    <ul>
                                                        <li class="active"><span style="background-color:#1b4a87"></span>
                                                        </li>
                                                        <li><span style="background-color:#5f94d6"></span></li>
                                                        <li><span style="background-color:#72aea2"></span></li>
                                                        <li><span style="background-color:#c79782"></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-qty">
                                            <div class="qty-plus-minus">
                                                <input class="qty-input" type="text" name="ec_qtybtn"
                                                    value="1" />
                                            </div>
                                            <div class="single-cart ">
                                                <button class="btn btn-primary">Add To Cart</button>
                                            </div>
                                            <div class="single-wishlist">
                                                <a class="btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                            <div class="single-quickview">
                                                <a href="#" class="btn-group quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                        class="fi-rr-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="#"><i
                                                            class="icon i-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i
                                                            class="icon i-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i
                                                            class="icon i-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i
                                                            class="icon i-youtube-play"></i></a></li>
                                                <li class="list-inline-item behance"><a href="#"><i
                                                            class="icon i-behance"></i></a></li>
                                                <li class="list-inline-item whatsapp"><a href="#"><i
                                                            class="icon i-whatsapp"></i></a></li>
                                                <li class="list-inline-item plus"><a href="#"><i
                                                            class="icon i-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="single-pro-tab">
                        <div class="single-pro-tab-wrapper">
                            <div class="single-pro-tab-nav">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#spt-nav-details"
                                            role="tab" aria-controls="spt-nav-details"
                                            aria-selected="true">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#spt-nav-info"
                                            role="tab" aria-controls="spt-nav-info" aria-selected="false">More
                                            Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#spt-nav-review"
                                            role="tab" aria-controls="spt-nav-review"
                                            aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  single-pro-tab-content">
                                <div id="spt-nav-details" class="tab-pane fade show active">
                                    <div class="single-pro-tab-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>
                                        <ul>
                                            <li>Any Product types that You want - Simple, Configurable</li>
                                            <li>Downloadable/Digital Products, Virtual Products</li>
                                            <li>Inventory Management with Backordered items</li>
                                            <li>Flatlock seams throughout.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="spt-nav-info" class="tab-pane fade">
                                    <div class="single-pro-tab-moreinfo">
                                        <ul>
                                            <li><span>Weight</span> 1000 g</li>
                                            <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                            <li><span>Color</span> Black, Pink, Red, White</li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="spt-nav-review" class="tab-pane fade">
                                    <div class="row">
                                        <div class="t-review-wrapper">
                                            <div class="t-review-item">
                                                <div class="t-review-avtar">
                                                    <img src="{{ asset('frontend/images2/review-image/1.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="t-review-content">
                                                    <div class="t-review-top">
                                                        <div class="t-review-name">Jeny Doe</div>
                                                        <div class="t-review-rating">
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="t-review-bottom">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="t-review-item">
                                                <div class="t-review-avtar">
                                                    <img src="{{ asset('frontend/images2/review-image/2.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="t-review-content">
                                                    <div class="t-review-top">
                                                        <div class="t-review-name">Linda Morgus</div>
                                                        <div class="t-review-rating">
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star-o"></i>
                                                            <i class="icon i-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="t-review-bottom">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ratting-content">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="ratting-star">
                                                        <span>Your rating:</span>
                                                        <div class="t-review-rating">
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star fill"></i>
                                                            <i class="icon i-star-o"></i>
                                                            <i class="icon i-star-o"></i>
                                                            <i class="icon i-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ratting-input">
                                                        <input name="your-name" placeholder="Name" type="text" />
                                                    </div>
                                                    <div class="ratting-input">
                                                        <input name="your-email" placeholder="Email*" type="email"
                                                            required />
                                                    </div>
                                                    <div class="ratting-input form-submit">
                                                        <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                                        <button class="btn btn-primary" type="submit"
                                                            value="Submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="pro-leftside common-leftside col-lg-3 col-md-12">
                    <div class="sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="sidebar-block">
                            <div class="sb-title">
                                <h3 class="sidebar-title">Category</h3>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">clothes</div>
                                        <ul style="display: block;">
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">shoes</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">bag</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">cosmetics</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">electronics</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">phone</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sb-block-content">
                                <ul>
                                    <li>
                                        <div class="sidebar-block-item">accessories</div>
                                        <ul>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                    <div class="sidebar-slider">
                        <div class="sb-slider-title">Best Sellers</div>
                        <div class="sb-pro-sl">
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/1_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Beautiful Teddy
                                                Bear</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/2_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Gym Backpack</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/3_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Beautiful Purse for
                                                Women</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/4_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Wool Felt Long Brim
                                                Hat</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/5_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Black Leather
                                                Belt</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/6_2.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Beautiful Tee for
                                                Women</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/7_1.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">Cotton Shirt for
                                                Men</a></h5>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/images2/product-image/8_2.jpg') }}"
                                            alt="product" /></a>
                                    <div class="pro-content">
                                        <h5 class="pro-title"><a href="product-left-sidebar.html">I Watch for Men</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    <section class="section releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/6_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/6_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
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
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <div class="pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="price">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/6_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/6_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/6_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/6_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-size">
                                    <span class="pro-opt-label">Size</span>
                                    <ul class="opt-size">
                                        <li class="active"><a href="#" class="opt-sz" data-old="$25.00"
                                                data-new="$20.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$27.00" data-new="$22.00"
                                                data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$35.00" data-new="$30.00"
                                                data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/7_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/7_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
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
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <div class="pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="price">
                                <span class="old-price">$12.00</span>
                                <span class="new-price">$10.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/7_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/7_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/7_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/7_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-size">
                                    <span class="pro-opt-label">Size</span>
                                    <ul class="opt-size">
                                        <li class="active"><a href="#" class="opt-sz" data-old="$12.00"
                                                data-new="$10.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$15.00" data-new="$12.00"
                                                data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$20.00" data-new="$17.00"
                                                data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/1_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/1_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
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
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <div class="pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="price">
                                <span class="old-price">$40.00</span>
                                <span class="new-price">$30.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/1_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/1_1.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/1_2.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/1_2.jpg') }}"
                                                data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/1_3.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/1_3.jpg') }}"
                                                data-tooltip="Green"><span style="background-color:#ffc476;"></span></a>
                                        </li>
                                        <li><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/1_4.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/1_4.jpg') }}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#1af0ba;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="pro-size">
                                    <span class="pro-opt-label">Size</span>
                                    <ul class="opt-size">
                                        <li class="active"><a href="#" class="opt-sz" data-old="$40.00"
                                                data-new="$30.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="opt-sz" data-old="$50.00" data-new="$40.00"
                                                data-tooltip="Medium">M</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="product-inner">
                        <div class="pro-image-outer">
                            <div class="pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="{{ asset('frontend/images2/product-image/2_1.jpg') }}"
                                        alt="Product" />
                                    <img class="hover-image" src="{{ asset('frontend/images2/product-image/2_2.jpg') }}"
                                        alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
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
                            <h5 class="pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                            <div class="pro-rating">
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star fill"></i>
                                <i class="icon i-star"></i>
                            </div>
                            <div class="pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="price">
                                <span class="old-price">$50.00</span>
                                <span class="new-price">$40.00</span>
                            </span>
                            <div class="pro-option">
                                <div class="pro-color">
                                    <span class="pro-opt-label">Color</span>
                                    <ul class="opt-swatch change-img">
                                        <li class="active"><a href="#" class="opt-clr-img"
                                                data-src="{{ asset('frontend/images2/product-image/2_1.jpg') }}"
                                                data-src-hover="{{ asset('frontend/images2/product-image/2_2.jpg') }}"
                                                data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product end -->



@endsection
@push('scripts')
    <script>
        $(document.body).addClass('product_page');
    </script>
@endpush
