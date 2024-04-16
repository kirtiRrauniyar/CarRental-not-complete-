<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.pages.about');
    }
    public function servies()
    {
        return view('front.pages.servies');
    }
    public function car()
    {
        return view('front.pages.car');
    }
    public function CarDetails()
    {
        return view('front.pages.car_details');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function pricing()
    {
        return view('front.pages.pricing');
    }
}
