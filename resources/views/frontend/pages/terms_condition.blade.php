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
                            <h2 class="breadcrumb-title">Terms & Condition</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Terms & Condition</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- About Us page -->
    <section class="page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Terms & Condition</h2>
                        <p class="sub-title mb-3">Welcome to the ekka multivendor marketplace</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="common-wrapper">
                        <div class="col-sm-12 cms-block">
                            <div class="cms-block-inner">
                                <h3 class="cms-block-title">Welcome to Ekka Multi Market.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cms-block">
                            <div class="cms-block-inner">
                                <h3 class="cms-block-title">Ekka Websites</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cms-block">
                            <div class="cms-block-inner">
                                <h3 class="cms-block-title">How browsing and vendor works?</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cms-block">
                            <div class="cms-block-inner">
                                <h3 class="cms-block-title">Becoming an vendor</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ec testmonial Start -->
    <section class="section test-section section-space-ptb-100 section-space-m" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="bg-title">Testimonial</h2>
                        <h2 class="title">Client Review</h2>
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
    <!-- ec testmonial end -->

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



@endsection
