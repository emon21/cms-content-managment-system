<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Partner::insert(
            [
                [
                    'title' => 'Partner 1',
                    'url' => 'https://google.com',
                    'image' => "https://img.freepik.com/free-photo/horizontal-portrait-smiling-happy-young-pleasant-looking-female-wears-denim-shirt-stylish-glasses-with-straight-blonde-hair-expresses-positiveness-poses_176420-13176.jpg",
                    'status' => 'publish',

                ],
                [
                    'title' => 'Partner 2',
                    'url' => 'https://google.com',
                    'image' => "https://img.freepik.com/free-photo/handsome-smiling-man-looking-with-disbelief_176420-19591.jpg",
                    'status' => 'publish',

                ],
                [
                    'title' => 'Partner 3',
                    'url' => 'https://google.com',
                    'image' => "https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg",
                    'status' => 'publish',

                ],
                [
                    'title' => 'Partner 4',
                    'url' => 'https://google.com',
                    'image' => "https://img.freepik.com/free-photo/happy-bearded-man-business-clothes-looking-camera_171337-11392.jpg",
                    'status' => 'publish',

                ]
            ]
        );
    }
}
