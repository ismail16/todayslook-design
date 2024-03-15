<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function about_us()
    {
        return view('frontend.pages.about_us');
    }
    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }


    public function track_order()
    {
        return view('frontend.pages.track_order');
    }

    public function privacy_policy()
    {
        return view('frontend.pages.privacy_policy ');
    }

    public function terms_condition()
    {
        return view('frontend.pages.terms_condition');
    }

    public function user_profile()
    {
        return view('frontend.pages.user_profile');
    }


    public function single_product()
    {
        return view('frontend.pages.single_product');
    }


    // public function track_order()
    // {
    //     return view('frontend.pages.track_order');
    // }


    // public function track_order()
    // {
    //     return view('frontend.pages.track_order');
    // }
}
