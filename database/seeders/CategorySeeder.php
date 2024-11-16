<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // $category = new Category();
        // $category->name = 'Development';
        // $category->save();
        // Create Category


        // Category::Create([
        //     'name' => 'Laravel Development',
        //     'slug' => Str::slug('Laravel Development'),
        //     'type' => 'blog',
        //     'status' => 'publish',
        //                     'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

        // ]);


        $randID = rand(1, 100);
        $category = [
            
            [
                'name' => 'Business',
                'slug' => Str::slug('Business'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/'
            ],

            [
                'name' => 'Business',
                'slug' => Str::slug('Business'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],

            [
                'name' => 'Entertainment',
                'slug' => Str::slug('Entertainment'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],

            [
                'name' => 'Art and Creativity',
                'slug' => Str::slug('Art and Creativity'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Lifestyle',
                'slug' => Str::slug('Lifestyle'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Health and Wellness',
                'slug' => Str::slug('Health and Wellness'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'IT Development',
                'slug' => Str::slug('IT Development'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'All Projects',
                'slug' => Str::slug('All Projects'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Practical Advice',
                'slug' => Str::slug('Practical Advice'),
                'type' => 'priceplan',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            
            [
                'name' => 'Creative Expression',
                'slug' => Str::slug('Creative Expression'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Depth Insights',
                'slug' => Str::slug('Depth Insights'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Inspiring Stories',
                'slug' => Str::slug('Inspiring Stories'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'The Significance of Services',
                'slug' => Str::slug('The Significance of Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Classification of Services',
                'slug' => Str::slug('Classification of Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Defining Services',
                'slug' => Str::slug('Defining Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ],
            [
                'name' => 'Creative Expression',
                'slug' => Str::slug('Creative Expression'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',

            ]


        ];

        // create Method
        DB::table('categories')->insert($category);
    }
}
