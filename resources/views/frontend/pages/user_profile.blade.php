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
                            <h2 class="breadcrumb-title">User profile</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">User profile</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- User profile section -->
    <section class="page-content vendor-uploads user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="shop-leftside vendor-sidebar col-lg-3 col-md-12">
                    <div class="sidebar-wrap border-box">
                        <!-- Sidebar Category Block -->
                        <div class="sidebar-block">
                            <div class="vendor-block">
                                <!-- <div class="vendor-block-bg"></div>
                                            <div class="vendor-block-detail">
                                                <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                                <h5>Mariana Johns</h5>
                                            </div> -->
                                <div class="vendor-block-items">
                                    <ul>
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">Invoice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-rightside col-lg-9 col-md-12">
                    <div class="vendor-dashboard-card vendor-setting-card">
                        <div class="vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="vendor-block-profile">
                                        <div class="vendor-block-img space-bottom-30">
                                            <div class="vendor-block-bg">
                                                <a href="#" class="btn btn-lg btn-primary"
                                                    data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal"
                                                    data-bs-target="#edit_modal">Edit Detail</a>
                                            </div>
                                            <div class="vendor-block-detail">
                                                <img class="v-img" src="{{ asset('frontend/images2/user/1.jpg') }}"
                                                    alt="vendor image">
                                                <h5 class="name">Mariana Johns</h5>
                                                <p>( Business Man )</p>
                                            </div>
                                            <p>Hello <span>Mariana Johns!</span></p>
                                            <p>From your account you can easily view and track orders. You can manage and
                                                change your account information like address, contact information and
                                                history of orders.</p>
                                        </div>
                                        <h5>Account Information</h5>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="vendor-detail-block vendor-block-email space-bottom-30">
                                                    <h6>E-mail address <a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                                class="fi-rr-edit"></i></a></h6>
                                                    <ul>
                                                        <li><strong>Email 1 : </strong>support1@exapmle.com</li>
                                                        <li><strong>Email 2 : </strong>support2@exapmle.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="vendor-detail-block vendor-block-contact space-bottom-30">
                                                    <h6>Contact nubmer<a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                                class="fi-rr-edit"></i></a></h6>
                                                    <ul>
                                                        <li><strong>Phone Nubmer 1 : </strong>(123) 123 456 7890</li>
                                                        <li><strong>Phone Nubmer 2 : </strong>(123) 123 456 7890</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="vendor-detail-block vendor-block-address mar-b-30">
                                                    <h6>Address<a href="javasript:void(0)" data-link-action="editmodal"
                                                            title="Edit Detail" data-bs-toggle="modal"
                                                            data-bs-target="#edit_modal"><i class="fi-rr-edit"></i></a></h6>
                                                    <ul>
                                                        <li><strong>Home : </strong>123, 2150 Sycamore Street, dummy text of
                                                            the, San Jose, California - 95131.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="vendor-detail-block vendor-block-address">
                                                    <h6>Shipping Address<a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                                class="fi-rr-edit"></i></a></h6>
                                                    <ul>
                                                        <li><strong>Office : </strong>123, 2150 Sycamore Street, dummy text
                                                            of
                                                            the, San Jose, California - 95131.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User profile section -->



@endsection
