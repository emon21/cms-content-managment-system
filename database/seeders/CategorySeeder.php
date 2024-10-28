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




        Category::Create([
            'name' => 'Laravel Development',
            'slug' => Str::slug('Laravel Development'),
            'type' => 'blog',
            'status' => 'publish',
            'image' => 'default.png',
        ]);

        $category = [
            [
                'name' => 'Business',
                'slug' => Str::slug('Business'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Business',
                'slug' => Str::slug('Business'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Entertainment',
                'slug' => Str::slug('Entertainment'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Entertainment',
                'slug' => Str::slug('Entertainment'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Art and Creativity',
                'slug' => Str::slug('Art and Creativity'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Lifestyle',
                'slug' => Str::slug('Lifestyle'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Health and Wellness',
                'slug' => Str::slug('Health and Wellness'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'IT Development',
                'slug' => Str::slug('IT Development'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'All Projects',
                'slug' => Str::slug('All Projects'),
                'type' => 'gallery',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Practical Advice',
                'slug' => Str::slug('Practical Advice'),
                'type' => 'priceplan',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Creative Expression',
                'slug' => Str::slug('Creative Expression'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Creative Expression',
                'slug' => Str::slug('Creative Expression'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Depth Insights',
                'slug' => Str::slug('Depth Insights'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Inspiring Stories',
                'slug' => Str::slug('Inspiring Stories'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'The Significance of Services',
                'slug' => Str::slug('The Significance of Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Classification of Services',
                'slug' => Str::slug('Classification of Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Defining Services',
                'slug' => Str::slug('Defining Services'),
                'type' => 'service',
                'status' => 'publish',
                'image' => 'default.png',
            ],
            [
                'name' => 'Creative Expression',
                'slug' => Str::slug('Creative Expression'),
                'type' => 'blog',
                'status' => 'publish',
                'image' => 'default.png',
            ]


        ];

        // create Method
        // DB::table('categories')->insert($category);
    }
}
