<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $tag = Tag::all();
        $taglist = $tag->random();
        
        return [
            //
            'tag_id' => $taglist,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(50),
        ];
    }
}
