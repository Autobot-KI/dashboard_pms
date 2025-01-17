<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.index', compact('body_class'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));

    }

    public function revenue()
    {
        $body_class = '';

        return view('frontend.data.revenue', compact('body_class'));

    }

    public function visit()
    {
        $body_class = '';

        return view('frontend.data.visit', compact('body_class'));

    }

    public function basket_size()
    {
        $body_class = '';

        return view('frontend.data.basket', compact('body_class'));

    }
}
