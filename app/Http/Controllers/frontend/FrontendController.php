<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        return 11111;
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


        $categoryList = \App\Models\Category::with('gallery')->get();
        // $categoryList = DB::table('categories')->inRandomOrder()->take(2)->limit(1)->get();
        // $categoryList = DB::table('categories')->where('id', $gallery->cat_id)->first();
        // $gallery = \App\Models\Gallery::where('cat_id', $categoryList->id)->inRandomOrder()->take(2)->limit(1)->get();

        // // $categoryID= $categoryList->type;
        // return $categoryList;

        // // return $randCat = \App\Models\Category::where('cat_id', $categoryList->id)->inRandomOrder()->first();

        // $randCat = \App\Models\Gallery::where('cat_id', $categoryList->id)->inRandomOrder()->first();
        // return $randCat;

        // $gallery = \App\Models\Gallery::where('cat_id', $categoryList->id)->with('category')->get();
        $gallery = \App\Models\Gallery::with('category')->get();

        //Random Data Show
 


        // return $gallery;

        return view('frontend.pages.gallery',compact('categoryList','gallery'));
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
