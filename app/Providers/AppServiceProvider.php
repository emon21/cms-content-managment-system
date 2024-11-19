<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Category;
use App\Models\PricePlan;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

        # category
        // $category = $this->app->make('category');
        // $category = Category::all();
        // dd($category->count());
        // view()->share('category', $category);
        
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

         if (!app()->runningInConsole() || app()->runningUnitTests()) {
            // $general_setting = DB::table('categories')->latest()->first();
            //...
      

       
        // $serviceCategory = Service::latest()->take(4)->with('category')->get();
        // view()->share('serviceCategory', $serviceCategory);


        // All Model 

        $serviceCategory = Service::where('cat_id', 17)->with('category')->get();

        // return $serviceCategory;

        $service = Service::all();
        $blog = Blog::latest()->take(6)->inRandomOrder()->get();
        $partner = Partner::all();
        $team = TeamMember::all();
        $pricePlan = PricePlan::all();
        $testimonial = Testimonial::all();
        $faq = Faq::all();
        $category = Category::get();
        $TotalBlog = Blog::all();

        $categorylist = Category::all();

        $website = WebsiteSetting::first();

        view()->share('categorylist', $categorylist);



        // $serviceCategory = Service::latest()->take(4)->get();
        
        $serviceCategory = Service::where('cat_id', 17)->with('category')->get();

        $data = [
            'serviceCategory' => $serviceCategory,
            'service' => $service,
            'blog' => $blog,
            'partner' => $partner,
            'team' => $team,
            'pricePlan' => $pricePlan,
            'testimonial' => $testimonial,
            'faq' => $faq,
            'category' => $category,
            'TotalBlog' => $TotalBlog,
        ];

        // return view('pages.frontend')->with($data);

        // View::share(['data' => $data]);

        # vew data share

        // View::share(['data' => $data]);

        View::share(['category' => $category, 'TotalBlog' => $TotalBlog,'pricePlan' => $pricePlan, 'serviceCategory' => $serviceCategory, 'service' => $service, 'blog' => $blog, 'partner' => $partner, 'team' => $team, 'testimonial' => $testimonial, 'faq' => $faq, 'website' => $website]);
        }
    }
}
