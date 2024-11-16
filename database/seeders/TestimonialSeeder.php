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

        Testimonial::insert(
            [
                [
                    'client_name' => 'Jacques Demy',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/happy-bearded-man-business-clothes-looking-camera_171337-11392.jpg',
                    'status' => 'publish',
                ],
                [
                    'client_name' => 'Brooklyn Simmons',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg',
                    'status' => 'publish',
                ],
                [
                    'client_name' => 'Jess Smith',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/horizontal-portrait-smiling-happy-young-pleasant-looking-female-wears-denim-shirt-stylish-glasses-with-straight-blonde-hair-expresses-positiveness-poses_176420-13176.jpg',
                    'status' => 'publish',
                    'status' => 'publish',
                ],
                [
                    'client_name' => 'Jacques Demy',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/handsome-smiling-man-looking-with-disbelief_176420-19591.jpg',
                    'status' => 'publish',
                ],
                [
                    'client_name' => 'Brooklyn Simmons',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg',
                    'status' => 'publish',
                ],
                
                [
                    'client_name' => 'Jacques Demy',
                    'designation' => 'Designation',
                    'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor amet. officia consequat duis enim velit mollit. Exercitation am consequa sunt nostrud amet. Excepteur sint occaecat cupidatatproident, sunt in culpa qui officia deserunt mollit anim id es',
                    'image' => 'https://img.freepik.com/free-photo/cute-smiling-young-man-with-bristle-looking-satisfied_176420-18989.jpg',
                    'status' => 'publish',
                ],
               
            ]
        );
    }
}
