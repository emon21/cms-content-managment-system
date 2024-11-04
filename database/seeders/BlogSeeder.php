<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\text;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = Category::all();


        // $category->type = "blog";

        # Factory::times(10)->create();

        #factory in Blog

        // Factory::create(10)->make(Blog::class)->each(function ($blog) use ($categories) {
        //     $blog->category_id = $categories->random()->id;

        // });

        // factory::create([
        //     'category_id' => $categories->random()->id,
        //     'title' => text(),
        //     'slug' => 'slug',
        //     'status' => 'publish',
        // ]);


        //    $blog = Blog::create([
        //         'cat_id' => $categories->random()->id,
        //         'title' => faker->title()->random(35),
        //         'type' => 'blog',
        //         'status' => 'publish',
        //         'image' => 'https://picsum.photos/200/300',
        //     ]);

        // $users = Blog::factory()->count(3)->make();


        // $blog = New Blog();
        // $blog->cat_id = $categories->random()->id;
        // $blog->title = "This Blog Title";
        // $blog->slug = Str::slug("This Blog Title");
        // $blog->status = 'publish';
        // $blog->image = 'https://picsum.photos/200/300';
        // $blog->tags = 'blog';
        // $blog->description = 'blog';
        // $blog->author = 'blog';
        // $blog->meta_title = 'blog';
        // $blog->meta_keywords = 'blog';
        // $blog->meta_description = 'blog';
        // $blog->publish_date	 = now();
        // $blog->save();


        // rand($img);


        
        
        foreach ($categories as $item) {
            
            # code...
            //Random id Generate
            $id = rand(1, 500);
            $img = 'https://picsum.photos/id/' . $id . '/200/300/'; //https://picsum.photos/id/200/200/300/

            $blog = new Blog();
            $blog->cat_id = $item->id;
            $blog->title = "This Blog Title";
            $blog->slug = Str::slug("This Blog Title");
            $blog->tags = 'blog';
            $blog->description = 'blog';
            $blog->author = 'blog';
            $blog->meta_title = 'blog';
            $blog->meta_keywords = 'blog';
            $blog->meta_description = 'blog';
            $blog->publish_date     = now();
            $blog->status = 'publish';
            $blog->image = $img;

            $blog->save();
        }


        // for ($i = 0; $i < 10; $i++) {

        //     //Random id Generate
        //     $id = rand(1, 500);
        //     $img = 'https://picsum.photos/id/' . $id . '/200/300/'; //https://picsum.photos/id/200/200/300/
        //     $blog = new Blog();
        //     $blog->cat_id = $categories->random()->id;
        //     $blog->title = "This Blog Title";
        //     $blog->slug = Str::slug("This Blog Title");
        //     $blog->status = 'publish';
        //     $blog->image = $img;
        //     $blog->tags = 'blog';
        //     $blog->description = 'blog';
        //     $blog->author = 'blog';
        //     $blog->meta_title = 'blog';
        //     $blog->meta_keywords = 'blog';
        //     $blog->meta_description = 'blog';
        //     $blog->publish_date     = now();
        //     $blog->save();

        //     // Blog::factory()->count(5)->create();

        // }
    }
}
