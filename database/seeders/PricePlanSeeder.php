<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        for ($i = 0; $i < 10; $i++) {
            $priceplan = new \App\Models\PricePlan();
            # code...
            $priceplan->title = 'Basic';
            $priceplan->price = 100;
            $priceplan->type = 'monthly';
            $priceplan->cat_id  = 10;
            $priceplan->feature = 'Basic';
            $priceplan->status = 'draft';
            $priceplan->save();
        }
    }
}
