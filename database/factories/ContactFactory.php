<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Contact::class;

    public function definition(): array
    {


      
        return [
            //

            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'subject' => now(),
            'message' =>fake()->text(),
            
        ];
    }
}
