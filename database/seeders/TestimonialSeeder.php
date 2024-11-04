<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 0; $i < 10; $i++) {
            # code...
            $randID = rand(1, 100);
            Testimonial::create([
                'client_name' => 'John Doe',
                'designation' => 'CEO',
                'description' => 'This is a testimonial',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',
                'status' => 'publish',
            ]);
        }
    }
}
