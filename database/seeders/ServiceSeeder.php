<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 0; $i < 10; $i++) {
            # code...
            $id = rand(1, 100);
            Service::create([
                'title' => 'Service 1',
                'slug' => Str::slug('Service 1'),
                'heading' => 'Service Heading',
                'cat_id' => 5,
                'plan_id' => 2,
                'status' => 'publish',
                'icon' => 'demo',
                'description' => 'publish',
                'meta_title' => 'publish',
                'meta_description' => 'publish',
                'meta_keywords' => 'publish',
                'image' => 'https://picsum.photos/id/' . $id . '/200/300/',

            ]);
        }
    }
}
