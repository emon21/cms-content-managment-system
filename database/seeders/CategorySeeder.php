<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Development',
            'type' => 'Blog',
            'status' => 'Publish',
            'image' => 'default.png',
        ]);

    }
}
