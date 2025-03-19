<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home() {
        return view('landingPage.home');
    }

    public function products() {
        return view('landingPage.product');
    }

    public function contact() {
        return view('landingPage.contact');
    }
}

