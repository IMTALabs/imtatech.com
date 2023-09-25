<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function mobile() {
        return view('landing.mobile');
    }

    public function web() {
        return view('landing.web');
    }

    public function ai() {
        return view('landing.ai');
    }
}
