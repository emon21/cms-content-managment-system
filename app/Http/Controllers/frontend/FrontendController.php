<?php

namespace App\Http\Controllers\frontend;

use App\Models\Faq;
use App\Models\Blog;
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
        //

        $service = Service::latest()->take(4)->get();
        $blog = Blog::all();
        $partner = Partner::all();
        $team = TeamMember::all();
        $pricePlan = PricePlan::all();
        $testimonial = Testimonial::all();
        $faq = Faq::all();

        $category = \App\Models\Category::get();


        $data = [
            'service' => $service,
            'blog' => $blog,
            'partner' => $partner,
            'team' => $team,
            'pricePlan' => $pricePlan,
            'testimonial' => $testimonial,
            'faq' => $faq,
            'category' => $category
        ];
        // return $data['service'];
        // return $fag;

        // return view('pages.frontend',['data' => $data]);

        // return view('pages.frontend',compact('data'));
        return view('pages.frontend')->with($data);
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
    public function blog(Category $category, Request $request)
    {

        # filter by search

        $search = $request->search_keyword;

        // return $search;

        # search

        $blog = Blog::where('title', 'like', "%$search%")
            ->orWhere('tags', 'like', "%$search%")
            ->get();



        //
        // return $category;

        // $blogList = Blog::when($requset->status,function($q) use($requset){
        //     $q->where('status',$requset->status);
        // });

        # Query String
        // advance clouses
        // $blog = Blog::when($request->category,function($query, $category){
        //     // $q->where('status',$requset->status);
        //      $query->where('cat_id', $category);
        // })->get();

        // return $blogList;

        $cat = Category::with('blogs')->get();
        // return $cat;


        $category = $request->get('category');

        if (!$category) {

            $blog = Blog::where('title', 'like', "%$search%")->withCount('category')->simplePaginate(6);
        } else {

            $blog = Blog::where('cat_id', $category)->with('category')->simplePaginate(6);
        }

        // return $blog;


        // $blog = Blog::when($request->category,function($query, $category){
        //     $query->where('cat_id', $category);
        // })->get();

        // return $request->category;

        // $cat =  $request->input('category'); 
        // $blog = Blog::where('cat_id', $cat)->get();
        // return $blog;


        $category = \App\Models\Category::get();
        // $blog = \App\Models\Blog::get();
        // return $blog;
        return view('frontend.pages.blog', compact('cat', 'category', 'blog'));
    }


    public function blogDetails(Blog $blog)
    {


        // Blog::where('cat_id',$blog->cat_id)->inRandomOrder()->get();

        $blogList = Blog::inRandomOrder()->latest()->take(4)->get();

        // return $blog;

        $category = Category::all();
        // $blog = Blog::all();
        return view('frontend.pages.blog-details', compact('category', 'blog', 'blogList'));
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

        return view('frontend.pages.gallery', compact('categoryList', 'gallery'));
    }

    /**
     * Display a listing of the resource.
     */

    public function contact()
    {
        //
        return view('frontend.pages.contact');
    }

    public function service(Request $request,Service $service)
    {
        //
       
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


        return view('frontend.pages.service', compact('serviceList', 'category'));

    }
    function ServiceDetails(Service $service)  {

        // return $service->slug;

        $pricePlan = PricePlan::all();
        // return $pricePlan;
        $category = Category::all();
        // $serviceList =Service::all();

        return view('frontend.pages.service-details',compact('service', 'pricePlan','category'));
        
    }


    public function PrivacyPolicy()
    {
        
        return view('frontend.pages.privacy-policy');

    }

    public function TermsCondition()
    {
        //
        return view('frontend.pages.terms-and-conditions');

    }
}
