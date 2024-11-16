<?php

namespace App\Http\Controllers\frontend;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Category;
use App\Models\PricePlan;
use App\Models\TeamMember;
use App\Models\Testimonial;
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
       
        // return view('pages.frontend');
        return view('pages.frontend');
    }

    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        //
        return view('website.about');
    }

    /**
     * Display a listing of the resource.
     */
    public function blog(Category $category, Request $request)
    {

        # filter by search

        $search = $request->search_keyword;

        # search

        $blog = Blog::where('title', 'like', "%$search%")
            ->orWhere('tags', 'like', "%$search%")
            ->get();

        $cat = Category::with('blogs')->get();
        // return $cat;


        $category = $request->get('category');
        // $invitee = Request::input('invitee'); // $request->has('invitee').
        // return $category;


        $list = Blog::where('cat_id', $request->get('category'))->get();
        // return $list;

        if (!$category) {

            $blog = Blog::where('title', 'like', "%$search%")->withCount('category')->simplePaginate(6);
        } else {

            $blog = Blog::where('cat_id', $category)->with('category')->simplePaginate(6);
        }

        $category = Category::get();
        // $blog = \App\Models\Blog::get();
        // return $blog;
        return view('website.blog.blog', compact('cat', 'category', 'blog'));
    }


    public function blogDetails(Blog $blog)
    {


        // Blog::where('cat_id',$blog->cat_id)->inRandomOrder()->get();
        $blogList = Blog::inRandomOrder()->latest()->take(4)->get();

        // return $blog;

        $category = Category::all();
        // $blog = Blog::all();
        return view('website.blog.blog-details', compact('category', 'blog', 'blogList'));
    }

    /**
     * Display a listing of the resource.
     */

    public function gallery()
    {
      
        $categoryList = Category::with('gallery')->get();
        $gallery = Gallery::with('category')->get();

        return view('website.gallery', compact('categoryList', 'gallery'));
    }

    /**
     * Display a listing of the resource.
     */

    public function contact()
    {
        //
        return view('website.contact');
    }

    public function service(Request $request,Service $service)
    {
               
        // return $service;
        // $category = Category::all();
        $category = Category::with('services')->get();
        // return $category;

        // Search in Service
        $search = $request->search_keyword;

        # searching Data

        // $serviceList = Service::where('title', 'like', "%$search%")
        // ->get();

        // 

        $ser = $request->get('service');
        $ss = Category::where('slug', $ser)->with('services')->get();

      
        if (!$ser) {

            $serviceList = Service::where('title', 'like', "%$search%")->with('category')->get();

        } else {

            $serviceList = Service::where('cat_id', $ser)->with('category')->get();

            // $serviceList = Service::where('cat_id', $ser)->orWhere('title', 'like', "%$search%")->withCount('category')->get();

        }

        // $service = Category::where('slug',$ser)->with('service')->get();
        // return $service;


        return view('website.service.service', compact('serviceList', 'category'));

    }
    function ServiceDetails(Service $service)  {

        // return $service->slug;

        $pricePlan = PricePlan::all();
        // return $pricePlan;
        $category = Category::all();
        // $serviceList =Service::all();

        return view('website.service.service-details',compact('service', 'pricePlan','category'));
        
    }


    public function PrivacyPolicy()
    {
        
        return view('website.privacy-policy');

    }

    public function TermsCondition()
    {
        //
        return view('website.terms-and-conditions');

    }
}
