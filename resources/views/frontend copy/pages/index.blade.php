@extends('frontend.layouts.master')
@section('title', "Home | Today's Look Australia")

@section('main')
    <div class="side-cart-overlay"></div>
    <div id="side-cart" class="side-cart">
        <div class="cart-inner">
            <div class="cart-top">
                <div class="cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend/images/product-image/6_1.jpg') }}" alt="product"></a>
                        <div class="pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Unisex classic tee</a>
                            <span class="cart-price"><span>$99.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend/images/product-image/3_1.jpg') }}" alt="product"></a>
                        <div class="pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Leather purse for women</a>
                            <span class="cart-price"><span>$85.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend/images/product-image/4_1.jpg') }}" alt="product"></a>
                        <div class="pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Woolen hat for men</a>
                            <span class="cart-price"><span>$130.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <!-- Main Slider Start -->
    <div class="main-slider section ">
        <div class="slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-content slider-animation">
                                    <h2 class="slide-stitle">Women Fashion</h2>
                                    <h1 class="slide-title">Top New Winter <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-content slider-animation">
                                    <h2 class="slide-stitle">Men's Fashion</h2>
                                    <h1 class="slide-title">Top New summer <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="cat_slider">
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <h2 class="d-none">Category</h2>
                                <div class="cat-image">
                                    <i class="fi-rr-laptop"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Laptops & PC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-stopwatch"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Smartwatches</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-gamepad"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Console Games</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-headset"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Headphones</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-video-camera"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Virtual Reality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cat_content">
                        <div class="cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="cat-desc">
                                    <span class="section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Trending Item Start -->
    <section class="section trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="title">Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="trend-slider">
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/1_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Baby toy teddybear</a>
                                </h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#be7a50;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#bd4e6f;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/1_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/1_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#528fb7;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/1_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/1_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#56a58e;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li><a href="#" class="opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/2_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/2_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Gym backpack mens</a>
                                </h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#e2a100;"></span></a></li>

                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/3_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/3_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Leather purse for
                                        women</a></h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#86c1f5;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#71d6c8;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/3_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/3_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#81d48e;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/3_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/3_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#e6b87d;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a>
                                            </li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/4_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/4_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Men's wool hat with
                                        brim</a></h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#b48059;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#71a06b;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/4_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/4_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#64c2da;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/4_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/4_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#9b6cc2;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/5_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/5_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Mens leather belt</a>
                                </h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/5_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/5_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#272727;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/5_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/5_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#533838;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">34</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">36</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/6_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/6_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Mens plain t-shirt</a>
                                </h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/6_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/6_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#acbadf;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/6_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/6_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#74c1c4;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/7_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/7_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Mens fashion cotton
                                        shirt</a></h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/7_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/7_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#68b180;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/7_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/7_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#a373da;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/8_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/8_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Boy smart watch</a>
                                </h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/8_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/8_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#adadad;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/8_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/8_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#d1b5d0;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/8_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/8_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#91a7e4;"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-inner">
                            <div class="pro-image-outer">
                                <div class="pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend/images/product-image/9_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend/images/product-image/9_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="pro-actions">
                                        <a class="btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="pro-title"><a href="product-left-sidebar.html">Boy Sport shoes
                                        Fashion</a></h5>
                                <span class="price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="pro-option">
                                    <div class="pro-color">
                                        <ul class="opt-swatch change-img">
                                            <li class="active"><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/9_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/9_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#5d7bff;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/9_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/9_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#a3d3ff;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/9_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/9_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#7dffc2;"></span></a></li>
                                            <li><a href="#" class="opt-clr-img"
                                                    data-src="{{ asset('frontend/images/product-image/9_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/images/product-image/9_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#835f5f;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-size">
                                        <ul class="opt-size">
                                            <li class="active"><a href="#" class="opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Item end -->

    <!-- Product tab Area Start -->
    <section class="section product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="title">Exclusive Products</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-3">
                    <ul class="pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-pro-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-special-offer">Special Offer</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-best-sellers">Best
                                Sellers</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-25%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    fashion leather purse</a></h5>
                                            <span class="price">
                                                <span class="new-price">$45.00</span>
                                                <span class="old-price">$65.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#765fb4;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#cc66b3;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#668d5c;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#79595b;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$65.00" data-new="$45.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$89.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    heel shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#8c04fc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#52afae;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#cc6daa;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#5ca252;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$99.00" data-new="$75.00"
                                                                data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$110.00"
                                                                data-new="$90.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$150.00"
                                                                data-new="$120.00" data-tooltip="Large">8</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-15%</span>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Leather
                                                    satchel for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$62.00</span>
                                                <span class="old-price">$78.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6a8b36;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b9754f;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#bd669d;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#8e6db7;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$78.00" data-new="$62.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$95.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Boys casual
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#d5c29a;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#c7d3a5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#a0dacb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#dfc3f4;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">8</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">9</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby cotton
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$79.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fa6ffb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#66c3f5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#58cf47;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#fd9f86;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$79.00" data-new="$50.00"
                                                                data-tooltip="Small">3</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$60.00"
                                                                data-new="$89.00" data-tooltip="Medium">4</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-20%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby toy
                                                    doctor kit</a></h5>
                                            <span class="price">
                                                <span class="new-price">$67.00</span>
                                                <span class="old-price">$80.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#08e5fb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#fb8cfc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#fbae40;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#6aaf62;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/17_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/17_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Trending</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Shopping
                                                    bag for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$54.00</span>
                                                <span class="old-price">$66.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/2_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$66.00" data-new="$54.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$79.00"
                                                                data-new="$65.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/18_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/18_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Smart air
                                                    pods pro</a></h5>
                                            <span class="price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/18_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/18_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#5e6778;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/18_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/18_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#d38d85;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/18_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/18_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#c7b899;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/18_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/18_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#d3d3d3;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-15%</span>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Leather
                                                    satchel for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$62.00</span>
                                                <span class="old-price">$78.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6a8b36;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b9754f;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#bd669d;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#8e6db7;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$78.00" data-new="$62.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$95.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/17_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/17_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Trending</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Shopping
                                                    bag for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$54.00</span>
                                                <span class="old-price">$66.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/2_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$66.00" data-new="$54.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$79.00"
                                                                data-new="$65.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-30%</span>
                                                <span class="flags">
                                                    <span class="sale">On Sale</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Boy shirt
                                                    Plain fashion</a></h5>
                                            <span class="price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/2_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$470.00"
                                                                data-new="$419.00" data-tooltip="Large">L</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Boys casual
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#d5c29a;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#c7d3a5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#a0dacb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#dfc3f4;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">8</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">9</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-25%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    fashion leather purse</a></h5>
                                            <span class="price">
                                                <span class="new-price">$45.00</span>
                                                <span class="old-price">$65.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#765fb4;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#cc66b3;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#668d5c;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#79595b;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$65.00" data-new="$45.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$89.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    heel shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#8c04fc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#52afae;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#cc6daa;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#5ca252;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$99.00" data-new="$75.00"
                                                                data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$110.00"
                                                                data-new="$90.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$150.00"
                                                                data-new="$120.00" data-tooltip="Large">8</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby cotton
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$79.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fa6ffb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#66c3f5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#58cf47;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#fd9f86;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$79.00" data-new="$50.00"
                                                                data-tooltip="Small">3</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$60.00"
                                                                data-new="$89.00" data-tooltip="Medium">4</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-20%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby toy
                                                    doctor kit</a></h5>
                                            <span class="price">
                                                <span class="new-price">$67.00</span>
                                                <span class="old-price">$80.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#08e5fb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#fb8cfc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#fbae40;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#6aaf62;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-30%</span>
                                                <span class="flags">
                                                    <span class="sale">On Sale</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Boy shirt
                                                    Plain fashion</a></h5>
                                            <span class="price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/2_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$470.00"
                                                                data-new="$419.00" data-tooltip="Large">L</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Boys casual
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#d5c29a;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#c7d3a5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#a0dacb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/14_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#dfc3f4;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">8</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">9</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-25%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    fashion leather purse</a></h5>
                                            <span class="price">
                                                <span class="new-price">$45.00</span>
                                                <span class="old-price">$65.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#765fb4;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#cc66b3;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#668d5c;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/11_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#79595b;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$65.00" data-new="$45.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$89.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Women's
                                                    heel shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#8c04fc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#52afae;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#cc6daa;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/12_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#5ca252;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$99.00" data-new="$75.00"
                                                                data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$110.00"
                                                                data-new="$90.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$150.00"
                                                                data-new="$120.00" data-tooltip="Large">8</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-15%</span>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Leather
                                                    satchel for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$62.00</span>
                                                <span class="old-price">$78.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6a8b36;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b9754f;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#bd669d;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/13_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#8e6db7;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$78.00" data-new="$62.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$95.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/17_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/17_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Trending</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Shopping
                                                    bag for womens</a></h5>
                                            <span class="price">
                                                <span class="new-price">$54.00</span>
                                                <span class="old-price">$66.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/1_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/2_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/2_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/3_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/3_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/4_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/4_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$66.00" data-new="$54.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$79.00"
                                                                data-new="$65.00" data-tooltip="Medium">M</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby cotton
                                                    shoes</a></h5>
                                            <span class="price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$79.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fa6ffb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#66c3f5;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#58cf47;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/15_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#fd9f86;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-size">
                                                    <ul class="opt-size">
                                                        <li class="active"><a href="#" class="opt-sz"
                                                                data-old="$79.00" data-new="$50.00"
                                                                data-tooltip="Small">3</a></li>
                                                        <li><a href="#" class="opt-sz" data-old="$60.00"
                                                                data-new="$89.00" data-tooltip="Medium">4</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-content">
                                    <div class="product-inner">
                                        <div class="pro-image-outer">
                                            <div class="pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-20%</span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="pro-actions">
                                                    <a class="btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="pro-title"><a href="product-left-sidebar.html">Baby toy
                                                    doctor kit</a></h5>
                                            <span class="price">
                                                <span class="new-price">$67.00</span>
                                                <span class="old-price">$80.00</span>
                                            </span>
                                            <div class="pro-option">
                                                <div class="pro-color">
                                                    <ul class="opt-swatch change-img">
                                                        <li class="active"><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_1.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#08e5fb;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#fb8cfc;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_3.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#fbae40;"></span></a></li>
                                                        <li><a href="#" class="opt-clr-img"
                                                                data-src="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-src-hover="{{ asset('frontend/images/product-image/16_4.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#6aaf62;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product tab Area End -->

    <!-- testimonial Start -->
    <section class="section test-section section-space-mt section-space-mb section-space-p"
        style="background-image: url('{{ asset('frontend/images/testimonial/testi_bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center test-top">
                    <div class="test-top-svg">
                        <h2 class="d-none">Testimonial</h2>
                        <i class="fi-rr-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="test-outer">
                    <ul id="testimonial-slider">
                        <li class="test-item">
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images/testimonial/4.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc"><i class="fi-rr-quote-right top"></i> Lorem Ipsum is
                                        simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has survived not only
                                        five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. It was popularised in <i
                                            class="fi-rr-quote-right bottom"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="test-item">
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images/testimonial/5.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc"><i class="fi-rr-quote-right top"></i> Lorem Ipsum is
                                        simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has survived not only
                                        five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. It was popularised in <i
                                            class="fi-rr-quote-right bottom"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="test-item">
                            <div class="test-inner">
                                <div class="test-img"><img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend/images/testimonial/6.jpg') }}" /></div>
                                <div class="test-content">
                                    <div class="test-desc"><i class="fi-rr-quote-right top"></i> Lorem Ipsum is
                                        simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has survived not only
                                        five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. It was popularised in <i
                                            class="fi-rr-quote-right bottom"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- services Section Start -->
    <section class="section services-section section-space-p">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ser_content ser_content_1 col-sm-12 col-md-4">
                    <div class="ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="service-desc">
                            <h2>Free Shipping</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ser_content ser_content_2 col-sm-12 col-md-4">
                    <div class="ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="service-desc">
                            <h2>24 / 7 Online Support</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ser_content ser_content_3 col-sm-12 col-md-4">
                    <div class="ser_inner">
                        <div class="service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="service-desc">
                            <h2>Money back</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!-- Brand Section Start -->
    <section class="section brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="brand-outer">
                    <ul id="brand-slider">
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/1.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/2.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/3.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/4.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/5.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/6.png') }}" /></a></div>
                        </li>
                        <li class="brand-item">
                            <div class="brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('frontend/images/brand-image/7.png') }}" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section End -->



@endsection
