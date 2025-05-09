<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function reviews(){
        return view('reviews');
    }

    public function pricing(){
        return view('price');
    }

    public function faqs(){
        return view('faqs');
    }

    public function user(){
        return view('user');
    }

    public function course(){
        return view('courses');
    }

    public function license(){
        return view('license');
    }
}
