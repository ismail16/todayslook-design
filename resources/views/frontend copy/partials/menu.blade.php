<!-- Header start  -->
<header class="header">
    @include('frontend.partials.menu_top')
    <!-- Ec Header Bottom  Start -->
    <div class="header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center header-logo">
                        <div class="header-logo">
                            <a href="/">
                                <img src="{{ asset('frontend/images/logo/logo16.png') }}" alt="Site Logo" />
                                <img class="dark-logo" src="{{ asset('frontend/images/logo/logo16-dark.png') }}"
                                    alt="Site Logo" style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center header-search">
                        <div class="header-search">
                            <form class="search-group-form" action="#">
                                <input class="form-control" placeholder="Search" type="text">
                                {{-- <div class="search-select-inner">
                                    <select name="search-cat">
                                        <option selected disabled>All Category</option>
                                        <option value="cloths">Cloths</option>
                                        <option value="bag">Bag</option>
                                        <option value="shoes">Shoes</option>
                                    </select>
                                </div> --}}
                                <button class="search_submit" type="submit">
                                    <i class="icon i-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="header-bottons">
                            <!-- Header User Start -->
                            <div class="header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i>
                                    <span class="btn-title">My Account</span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header wishlist Start -->
                            <a href="wishlist.html" class="header-btn header-wishlist">
                                <div class="header-icon"><i class="fi-rr-heart"></i><span
                                        class="header-count wishlist-count">0</span></div>
                                <span class="btn-title">wishlist</span>
                            </a>
                            <!-- Header wishlist End -->
                            <!-- Header Cart Start -->
                            <a href="#side-cart" class="header-btn side-toggle">
                                <div class="header-icon"><i class="fi-rr-shopping-basket"></i><span
                                        class="header-count cart-count">3</span></div>
                                <span class="btn-title">Cart</span>
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Button End -->

    <!-- Header responsive Bottom  Start -->
    <div class="header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ asset('frontend/images/logo/logo16.png') }}"
                                alt="Site Logo" /><img class="dark-logo"
                                src="{{ asset('frontend/images/logo/logo16-dark.png') }}" alt="Site Logo"
                                style="display: none;" /></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col align-self-center header-search">
                    <div class="header-search">
                        <form class="search-group-form" action="#">
                            <input class="form-control" placeholder="Search" type="text">
                            <div class="search-select-inner">
                                <select name="search-cat">
                                    <option selected disabled>All Category</option>
                                    <option value="cloths">Cloths</option>
                                    <option value="bag">Bag</option>
                                    <option value="shoes">Shoes</option>
                                </select>
                            </div>
                            <button class="search_submit" type="submit"><i class="icon i-search"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->

    <!-- Main Menu Start -->
    <div id="main-menu-desk" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="main-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown position-static">
                                <a href="javascript:void(0)">
                                    Categories
                                    <i class="icon i-angle-down"></i>
                                </a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a>
                                            </li>
                                            <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                            </li>
                                            <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                    column</a></li>
                                            <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                    column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar
                                                    3 column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar
                                                    4 column</a></li>
                                            <li><a href="shop-banner-full-width.html">Banner Full width 4
                                                    column</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Columns
                                                    Variation</a></li>
                                            <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                            <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">List Variation</a>
                                            </li>
                                            <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                            <li><a href="shop-list-banner-left-sidebar.html">Banner left
                                                    sidebar</a>
                                            </li>
                                            <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="main-banner w-100">
                                            <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                                        class="img-responsive"
                                                        src="{{ asset('frontend/images/menu-banner/5.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                        class="img-responsive"
                                                        src="{{ asset('frontend/images/menu-banner/6.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                        class="img-responsive"
                                                        src="{{ asset('frontend/images/menu-banner/7.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                        class="img-responsive"
                                                        src="{{ asset('frontend/images/menu-banner/8.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)">Products <i class="icon i-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                            <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                            <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            video
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                            </li>
                                            <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            gallery
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-gallery-left-sidebar.html">Gallery left
                                                    sidebar</a>
                                            </li>
                                            <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                    sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="product-full-width.html">Product full width</a></li>
                                    <li><a href="product-360-full-width.html">360 full width</a></li>
                                    <li><a href="product-video-full-width.html">Video full width</a></li>
                                    <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)">Pages <i class="icon i-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="track-order.html">Track Order</a></li>
                                    <li><a href="terms-condition.html">Terms Condition</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <span class="main-label-note-new" data-toggle="tooltip" title="NEW"></span>
                                <a href="javascript:void(0)">Others <i class="icon i-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                            Confirmation
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a>
                                            </li>
                                            <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a>
                                            </li>
                                            <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a>
                                            </li>
                                            <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a>
                                            </li>
                                            <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                            password
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-forgot-password-1.html">Reset password
                                                    1</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-2.html">Reset password
                                                    2</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-3.html">Reset password
                                                    3</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-4.html">Reset password
                                                    4</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-5.html">Reset password
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                            Promotional
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                            <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                            <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                            <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                            <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                            <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                            <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                            <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-hot"></span>
                                        <a href="javascript:void(0)">Vendor account
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                            <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                            <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                            <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-trending"></span>
                                        <a href="javascript:void(0)">User account
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="user-profile.html">User Profile</a></li>
                                            <li><a href="user-history.html">History</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="track-order.html">Track Order</a></li>
                                            <li><a href="user-invoice.html">Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                            pages
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="404-error-page.html">404 error page</a></li>
                                            <li><a href="under-maintenance.html">maintanence page</a></li>
                                            <li><a href="coming-soon.html">Coming soon page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-new"></span>
                                        <a href="javascript:void(0)">Vendor Catalog
                                            <i class="icon i-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                            <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)">Blog <i class="icon i-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                    <li><a href="blog-detail-left-sidebar.html">detail left sidebar</a></li>
                                    <li><a href="blog-detail-right-sidebar.html">detail right sidebar</a></li>
                                    <li><a href="blog-full-width.html">full width</a></li>
                                    <li><a href="blog-detail-full-width.html">detail full width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)">Elements <i class="icon i-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="elemets-products.html">Products</a></li>
                                    <li><a href="elemets-typography.html">Typography</a></li>
                                    <li><a href="elemets-title.html">Titles</a></li>
                                    <li><a href="elemets-categories.html">Categories</a></li>
                                    <li><a href="elemets-buttons.html">Buttons</a></li>
                                    <li><a href="elemets-tabs.html">Tabs</a></li>
                                    <li><a href="elemets-accordions.html">Accordions</a></li>
                                    <li><a href="elemets-blog.html">Blogs</a></li>
                                </ul>
                            </li>
                            <li><a href="offer.html">Hot Offers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Main Menu End -->
    <!-- Ekka Menu Start -->
    <div id="mobile-menu" class="side-cart mobile-menu">
        <div class="menu-title">
            <span class="menu_title">My Menu</span>
            <button class="close">×</button>
        </div>
        <div class="menu-inner">
            <div class="menu-content">
                <ul>
                    <li><a href="index.html">Home</a></li>

                    <li><a href="javascript:void(0)">Categories</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                    <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                    <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                    <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                    <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Columns Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                    <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">List Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                    <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                    <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                    <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                </ul>
                            </li>
                            <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive"
                                        src="{{ asset('frontend/images/menu-banner/5.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Products</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Product page</a>
                                <ul class="sub-menu">
                                    <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                    <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product 360</a>
                                <ul class="sub-menu">
                                    <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                    <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product vodeo</a>
                                <ul class="sub-menu">
                                    <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                    <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                    <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="product-full-width.html">Product full width</a></li>
                            <li><a href="product-360-full-width.html">360 full width</a></li>
                            <li><a href="product-video-full-width.html">Video full width</a></li>
                            <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Others</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Mail Confirmation</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                    <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                    <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                    <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                    <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Reset password</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                    <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                    <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                    <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                    <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Promotional</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                    <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                    <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                    <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                    <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                    <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                    <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                    <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                    <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                    <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                    <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">User Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="user-profile.html">User Profile</a></li>
                                    <li><a href="user-history.html">User History</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="track-order.html">Track Order</a></li>
                                    <li><a href="user-invoice.html">User Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Construction Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404-error-page.html">404 Error Page</a></li>
                                    <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                    <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                    <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="track-order.html">Track Order</a></li>
                            <li><a href="terms-condition.html">Terms Condition</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                            <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                            <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog full width</a></li>
                            <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                        <ul class="sub-menu">
                            <li><a href="elemets-products.html">Products</a></li>
                            <li><a href="elemets-typography.html">Typography</a></li>
                            <li><a href="elemets-title.html">Titles</a></li>
                            <li><a href="elemets-categories.html">Categories</a></li>
                            <li><a href="elemets-buttons.html">Buttons</a></li>
                            <li><a href="elemets-tabs.html">Tabs</a></li>
                            <li><a href="elemets-accordions.html">Accordions</a></li>
                            <li><a href="elemets-blog.html">Blogs</a></li>
                        </ul>
                    </li>
                    <li><a href="offer.html">Hot Offers</a></li>
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <div class="header-top-lan-curr">
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
                </div>
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <li class="list-inline-item"><a href="#"><i class="icon i-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="icon i-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="icon i-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="icon i-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>

    <!-- Ekka Menu End -->
</header>
<!-- Header End  -->
