<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
    }
}
