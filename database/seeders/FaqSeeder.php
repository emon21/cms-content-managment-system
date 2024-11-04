<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        for ($i = 0; $i < 5; $i++) {
            # code...
            Faq::create([
                'title' => 'What is Lorem Ipsum?',
                'slug' => str::slug('What is Lorem Ipsum?'),
                'status' => 'publish',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, nulla.',
            ]);
        }
    }
}
