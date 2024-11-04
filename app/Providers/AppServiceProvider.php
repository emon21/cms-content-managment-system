<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
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

        $categorylist = Category::all();
        $blog = Blog::all();

        // dd($data->count());

        // $data = [
        //     'category' => $category,
        //     'blog' => $blog,
           
        // ];

        // dd($data);

        // return $data->category;

        // View->()share('menu', $data);
        view()->share('categorylist', $categorylist);

    }
}
