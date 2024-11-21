<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // for ($i = 0; $i < 10; $i++) {
        //     # code...
        //     $id = rand(1, 100);
        //     Service::create([
        //         'title' => 'Service 1',
        //         'slug' => Str::slug('Service 1'),
        //         'heading' => 'Service Heading',
        //         'cat_id' => 5,
        //         'plan_id' => 2,
        //         'status' => 'publish',
        //         'icon' => 'demo',
        //         'description' => 'publish',
        //         'meta_title' => 'publish',
        //         'meta_description' => 'publish',
        //         'meta_keywords' => 'publish',
        //         'image' => 'https://picsum.photos/id/' . $id . '/200/300/',

        //     ]);
        // }

        $service = [

            [
                'title' => 'Tech Solutions Hub',
                'slug' => Str::slug('Tech Solutions Hub'),
                'heading' => 'Amet minim mollit non deserunt ullamco
             est sit aliqua dolordo amet sint.Velit officia consequat duisenim velit mollit Exercitation.',
                'cat_id' => 3,
                'status' => 'publish',
                'icon' => 'fab fa-accusoft',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041863.jpg',
            ],
            [
                'title' => 'The Marketing Solutions',
                'slug' => Str::slug('The Marketing Solutions'),
                'heading' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
             Velit officia consequat duis enim velit mollit Exercitation.',
                'cat_id' => 4,
                'status' => 'publish',
                'icon' => 'fab fa-affiliateth',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041857.jpg',
            ],
            [
                'title' => 'Digital Marketing Mastery',
                'slug' => Str::slug('Digital Marketing Mastery'),
                'heading' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
             Velit officia consequat duis enim velit mollit Exercitation.',
                'cat_id' => 13,
                'status' => 'publish',
                'icon' => 'fab fa-adversal',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041867.jpg',
            ],
            [
                'title' => 'Cyber Security',
                'slug' => Str::slug('Cyber Security'),
                'heading' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
                Velit officia consequat duis enim velit mollit Exercitation.',
                'cat_id' => 15,
                'status' => 'publish',
                'icon' => 'fab fa-adn',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041853.jpg',
            ],
            [
                'title' => 'Development of Software',
                'slug' => Str::slug('Development of Software'),
                'heading' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
                Velit officia consequat duis enim velit mollit Exercitation.',
                'cat_id' => 14,
                'status' => 'publish',
                'icon' => 'fab fa-apple',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/male-supervisor-training-latin-executive-call-center-manager-explaining-work-stuff-employees-offering-tech-support-customer-service_662251-427.jpg',
            ],

            [
                'title' => 'Protecting sensitive data',
                'slug' => Str::slug('Protecting sensitive data'),
                'heading' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
                Velit officia consequat duis enim velit mollit Exercitation.',
                'cat_id' => 2,
                'status' => 'publish',
                'icon' => 'fab fa-app-store',
                'description' => "Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'meta_title' => 'Category of services',
                'meta_keywords' => 'Professional , Financial  , Information',
                'meta_description' => 'Software development, IT consulting, and support services.',
                'image' => 'https://img.freepik.com/free-photo/young-couple-buying-car-car-showroom_1303-15127.jpg',
            ]
        ];

        DB::table('services')->insert($service);
    }
}
