<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){
        return view('website.index');
    }

    public function service() {
        
        return view('website.service');        
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function partner()
    {
        return view('website.partner');
    }

    public function team() {
        return view('website.team');        
    }

    public function pricePlan() {
        return view('website.plan');        
    }

    public function testimonial() {
        return view('website.testimonial');        
    }

    public function faq()
    {
        return view('website.faq');
    }
}
