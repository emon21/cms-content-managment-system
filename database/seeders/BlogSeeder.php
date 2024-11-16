<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\text;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
            $blog = [

                [
                'cat_id' => 10,
                'title' => 'Landscape expands, so do the threats accompany it',
                'slug' => Str::slug('Landscape expands, so do the threats accompany it'),
                'tags' => 'expands',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Landscape expands, so do the threats accompany it',
                'meta_keywords' => 'Landscape expands, so do the threats accompany it',
                'meta_description' => 'Landscape expands, so do the threats accompany it',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/person-using-laptop-cafe_23-2147962618.jpg',
                // 'image' => 'https://preview.kamleshyadav.com/pixacms//public/storage/blog/images/january2024/170435298665965cda52e57.jpg',
               
                    
                ],
            [
                'cat_id' => 10,
                'title' => 'Email Marketing Strategies for Conversion',
                'slug' => Str::slug('Email Marketing Strategies for Conversion'),
                'tags' => 'advice',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Email Marketing Strategies for Conversion',
                'meta_keywords' => 'Email Marketing Strategies for Conversion',
                'meta_description' => 'Email Marketing Strategies for Conversion',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/digital-laptop-working-camera-concept_53876-31120.jpg',

            ],

            [
                'cat_id' => 10,
                'title' => 'Engaging creating blogs posts articles producing',
                'slug' => Str::slug('Engaging creating blogs posts articles producing'),
                'tags' => 'Stories',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Engaging creating blogs posts articles producing',
                'meta_keywords' => 'Engaging creating blogs posts articles producing',
                'meta_description' => 'Engaging creating blogs posts articles producing',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/close-up-person-working-home-night_23-2149090964.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => 'Email Marketing Strategies for Conversion',
                'slug' => Str::slug('Email Marketing Strategies for Conversion'),
                'tags' => 'advice',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Email Marketing Strategies for Conversion',
                'meta_keywords' => 'Email Marketing Strategies for Conversion',
                'meta_description' => 'Email Marketing Strategies for Conversion',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/woman-sitting-floor-using-laptop_53876-14329.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => 'Engaging creating blogs posts articles producing',
                'slug' => Str::slug('Engaging creating blogs posts articles producing'),
                'tags' => 'Stories',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Engaging creating blogs posts articles producing',
                'meta_keywords' => 'Engaging creating blogs posts articles producing',
                'meta_description' => 'Engaging creating blogs posts articles producing',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/webinar-brainstorming-web-conference-connection-technology-concept_53876-124962.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => 'Sed ut perspiciatis unde omnis iste the natus end',
                'slug' => Str::slug('Sed ut perspiciatis unde omnis iste the natus end'),
                'tags' => 'insights',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Sed ut perspiciatis unde omnis iste the natus end',
                'meta_keywords' => 'Sed ut perspiciatis unde omnis iste the natus end',
                'meta_description' => 'Sed ut perspiciatis unde omnis iste the natus end',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/worker-reading-news-with-tablet_1162-83.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => 'Sed ut perspiciatis unde omnis iste the natus end,',
                'slug' => Str::slug('Sed ut perspiciatis unde omnis iste the natus end,'),
                'tags' => 'insights',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => 'Sed ut perspiciatis unde omnis iste the natus end,',
                'meta_keywords' => 'Sed ut perspiciatis unde omnis iste the natus end,',
                'meta_description' => 'Sed ut perspiciatis unde omnis iste the natus end,',
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/technology-communication-icons-symbols-concept_53876-120314.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => "Printing and typesetting industry Letraset sheets",
                'slug' => Str::slug('Printing and typesetting industry Letraset sheets'),
                'tags' => 'advice',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => "Printing and typesetting industry Letraset sheets",
                'meta_keywords' => "Printing and typesetting industry Letraset sheets",
                'meta_description' => "Printing and typesetting industry Letraset sheets",
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/social-media-business-concept-with-wooden-blocks-notebook-glasses-pen-keyboard-white-background-flat-lay_176474-7865.jpg',
 
            ],
            [
                'cat_id' => 10,
                'title' => "creating engaging blog post articles to producing",
                'slug' => Str::slug('creating engaging blog post articles to producing'),
                'tags' => 'expands',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => "creating engaging blog post articles to producing",
                'meta_keywords' => "creating engaging blog post articles to producing",
                'meta_description' => "creating engaging blog post articles to producing",
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/online-blog_53876-123696.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => "consectetur adipiscing eiusmod eiusmod incididunt",
                'slug' => Str::slug('consectetur adipiscing eiusmod eiusmod incididunt'),
                'tags' => 'Stories',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => "consectetur adipiscing eiusmod eiusmod incididunt",
                'meta_keywords' => "consectetur adipiscing eiusmod eiusmod incididunt",
                'meta_description' => "consectetur adipiscing eiusmod eiusmod incididunt",
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/aerial-view-woman-using-computer-laptop-wooden-table_53876-20661.jpg',


            ],
            [
                'cat_id' => 10,
                'title' => "industry's standard dummy text ever since the 1500",
                'slug' => Str::slug("industry's standard dummy text ever since the 1500"),
                'tags' => 'insights',
                'description' => "Dummy text of the printing And Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'author' => 'Mia Parker',
                'meta_title' => "industry's standard dummy text ever since the 1500",
                'meta_keywords' => "industry's standard dummy text ever since the 1500",
                'meta_description' => "industry's standard dummy text ever since the 1500",
                'publish_date' => now(),
                'status' => 'publish',
                'image' => 'https://img.freepik.com/free-photo/young-couple-buying-car-car-showroom_1303-15127.jpg',


            ]

                ];

        DB::table('blogs')->insert($blog);
    }
}
