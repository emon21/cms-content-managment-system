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


        // for ($i = 0; $i < 10; $i++) {
        //     $priceplan = new \App\Models\PricePlan();
        //     # code...
        //     $priceplan->title = 'Basic';
        //     $priceplan->price = 100;
        //     $priceplan->type = 'monthly';
        //     $priceplan->cat_id  = 10;
        //     $priceplan->feature = 'Basic';
        //     $priceplan->status = 'draft';
        //     $priceplan->save();
        // }
        
        PricePlan::insert([
            [
                'title' => 'Proffesional',
                'price' => 1000,
                'type' => 'yearly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'draft',
                
            ],
            [
                'title' => 'Business',
                'price' => 99,
                'type' => 'monthly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'draft',

            ],
            [
                'title' => 'Popular',
                'price' => 10,
                'type' => 'Yearly',
                'cat_id' => 10,
                'feature' => 'Basic',
                'status' => 'draft',

            ]
            ]);
    }
}
