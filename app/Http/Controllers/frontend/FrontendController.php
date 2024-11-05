<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        return view('pages.frontend');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        //
        return view('frontend.pages.about');

    }
    
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        //
        return view('frontend.pages.blog');

    }
    
    /**
     * Display a listing of the resource.
     */

    public function gallery()
    {
        //
        return view('frontend.pages.gallery');
    }
    
    /**
     * Display a listing of the resource.
     */

    public function contact()
    {
        //
        return view('frontend.pages.contact');
    }
    
    // public function service()
    // {
    //     //
    //     return view('frontend.pages.contact');
    // }


    public function PrivacyPolicy()
    {
        //
        return view('frontend.pages.privacy-policy');
    }

    public function TermsCondition()
    {
        //
        return view('frontend.pages.terms-and-conditions');
    }

   
}
