<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

            $faq = [

                [
                'title' => 'Where can I subscribe to your newsletter?',
                'slug' => str::slug('Where can I subscribe to your newsletter?'),
                'status' => 'publish',
                'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation. Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.',
                ],

                [
                'title' => 'What does lorem mean?',
                'slug' => str::slug('What does lorem mean?'),
                'status' => 'publish',
                'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation. Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.',
                ],

                [
                'title' => 'Can I order a free sample copy of a magazine?',
                'slug' => str::slug('Can I order a free sample copy of a magazine?'),
                'status' => 'publish',
                'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation. Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.',
                ],

                [
                'title' => 'How do I edit Inner pages?',
                'slug' => str::slug('How do I edit Inner pages?'),
                'status' => 'draft',
                'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation. Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.',
                ]
                
            ];

            DB::table('faqs')->insert($faq);
       
    }
}
