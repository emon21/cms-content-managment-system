<?php

namespace Database\Seeders;

use App\Models\PricePlan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        PricePlan::insert([
            [
                'title' => 'Popular',
                'price' => 10,
                'type' => 'monthly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'publish',

            ],
            [
                'title' => 'Business',
                'price' => 99,
                'type' => 'monthly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'publish',

            ],
            [
                'title' => 'Proffesional',
                'price' => 100,
                'type' => 'Yearly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'publish',

            ]
        ]);
    }
}
