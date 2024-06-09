<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // this function is main home page
    public function FrontHome(){
        return view('frontend.home');
    }
    // this function is main home page
    public function productDetails(){
        return view('frontend.product_details');
    }
}
