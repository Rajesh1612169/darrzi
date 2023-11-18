<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
//        dd();
        return view('frontend.pages.home');
    }
    public function faqs() {
        return view('frontend.pages.faqs');
    }
    public function ourTeam() {
        return view('frontend.pages.our-team');
    }
    public function aboutUs() {
        return view('frontend.pages.about-us');
    }
    public function contactUs() {
        dd('hi');
//        return view('frontend.pages.our-team');
    }

}
