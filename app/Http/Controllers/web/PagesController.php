<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function aboutUs(){
        return view('pages.about-us');
    }

    public function howitWorks(){
        return view('pages.how-it-works');

    }

    public function reqResolution(){
        return view('pages.resolution-consultancy-form');

    }

    public function faqs(){
        return view('pages.faqs');

    }

    public function contactUs(){
        return view('pages.contact-us');

    }

   

}
