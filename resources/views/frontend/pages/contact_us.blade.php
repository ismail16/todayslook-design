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
                            <h2 class="breadcrumb-title">Contact Us</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
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
                <div class="common-wrapper">
                    <div class="contact-leftside">
                        <div class="contact-container">
                            <div class="contact-form">
                                <form action="#" method="post">
                                    <span class="contact-wrap">
                                        <label>First Name*</label>
                                        <input type="text" name="firstname" placeholder="Enter your first name"
                                            required />
                                    </span>
                                    <span class="contact-wrap">
                                        <label>Last Name*</label>
                                        <input type="text" name="lastname" placeholder="Enter your last name" required />
                                    </span>
                                    <span class="contact-wrap">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="Enter your email address"
                                            required />
                                    </span>
                                    <span class="contact-wrap">
                                        <label>Phone Number*</label>
                                        <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                            required />
                                    </span>
                                    <span class="contact-wrap">
                                        <label>Comments/Questions*</label>
                                        <textarea name="address" placeholder="Please leave your comments here.."></textarea>
                                    </span>
                                    <span class="contact-wrap ec-recaptcha">
                                        <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                            data-callback="verifyRecaptchaCallback"
                                            data-expired-callback="expiredRecaptchaCallback"></span>
                                        <input class="form-control d-none" data-recaptcha="true" required
                                            data-error="Please complete the Captcha">
                                        <span class="help-block with-errors"></span>
                                    </span>
                                    <span class="contact-wrap contact-btn">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="contact-rightside">
                        <div class="ec_contact_map">
                            <div class="ec_map_canvas">
                                <iframe id="ec_map_canvas"
                                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d71263.65594328841!2d144.93151478652146!3d-37.8734290780509!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1615963387757!5m2!1sen!2sus"></iframe>
                                <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                            </div>
                        </div>
                        <div class="ec_contact_info">
                            <h1 class="ec_contact_info_head">Contact us</h1>
                            <ul class="align-items-center">
                                <li class="contact-item"><i class="icon i-map-marker"
                                        aria-hidden="true"></i><span>Address :</span>71 Pilgrim Avenue Chevy Chase, east
                                    california. east california. MD
                                    20815, USA</li>
                                <li class="contact-item align-items-center"><i class="icon i-phone"
                                        aria-hidden="true"></i><span>Call Us :</span><a href="tel:+440123456789">+44 0123
                                        456 789</a></li>
                                <li class="contact-item align-items-center"><i class="icon i-envelope"
                                        aria-hidden="true"></i><span>Email :</span><a
                                        href="mailto:example@ec-email.com">example@ec-email.com</a></li>
                            </ul>
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
