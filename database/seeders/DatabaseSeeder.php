<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\PricePlan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // PricePlan::factory()->count(3)->create();
       Contact::factory()->count(3)->create();


        $this->call([
            CategorySeeder::class,
            BlogSeeder::class,
            FaqSeeder::class,
            GallerySeeder::class,
            PartnerSeeder::class,
            PricePlanSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            

        ]);
    }

}
