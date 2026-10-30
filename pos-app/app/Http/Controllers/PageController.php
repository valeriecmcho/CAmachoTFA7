<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display the landing/home page.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        return view('about');
    }
}

