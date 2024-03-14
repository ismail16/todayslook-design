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

    public function about_us()
    {
        return view('frontend.pages.about_us');
    }

    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    }
}
