<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\PricePlan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        # Category
        $category = Category::all();
        $randomCategory = $category->random();

        // if($category->type('service')){
        //     $catType = $category->type('service');
        // }
        //  $catType = $category->id;


        // $randomCategory = $catType;

        # Price Plan
        $pricePlan = PricePlan::all();
        $randomPlan = $pricePlan->random(); 

        $id = rand(1, 100);

        $title = $this->faker->sentence();
        
        return [
            //
            'title' => $title,
            // 'slug' => $this->faker->slug(), //random slug
            'slug' => Str::slug($title),
            'heading' => $this->faker->paragraph(3),
            // 'cat_id' => $this->faker->numberBetween(1, 10),
            // 'plan_id' => $this->faker->numberBetween(1, 10), // min to max
            
            'cat_id' => $randomCategory,
            'plan_id' => $randomPlan,

            'status' => $this->faker->randomElement(['publish', 'draft']),
            'icon' => $this->faker->word(),
            'description' => $this->faker->paragraph(3),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->sentence(),
            // 'image' => $this->faker->imageUrl(),
            'image' => 'https://picsum.photos/id/' . $id . '/200/300/',
            


        ];


        // $id = rand(1, 100);
        // Service::create([
        //     'title' => 'Service 1',
        //     'slug' => Str::slug('Service 1'),
        //     'heading' => 'Service Heading',
        //     'cat_id' => 5,
        //     'plan_id' => 2,
        //     'status' => 'publish',
        //     'icon' => 'demo',
        //     'description' => 'publish',
        //     'meta_title' => 'publish',
        //     'meta_description' => 'publish',
        //     'meta_keywords' => 'publish',
        //     'image' => 'https://picsum.photos/id/' . $id . '/200/300/',

        // ]);
    }
}
