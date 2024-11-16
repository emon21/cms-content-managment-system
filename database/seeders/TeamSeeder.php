<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      
            $team =[
                [
                    'name' => 'Alex Sterling',
                    'designation' => 'Designation',
                    'facebook' => 'FB',
                    'twitter' => 'TW',
                    'instagram' => 'IG',
                    'linkedin' => 'Ld',
                    'image' => 'https://img.freepik.com/free-photo/horizontal-portrait-smiling-happy-young-pleasant-looking-female-wears-denim-shirt-stylish-glasses-with-straight-blonde-hair-expresses-positiveness-poses_176420-13176.jpg',
                    'status' => 'publish',
                ],
                [
                    'name' => 'Casey Harper',
                    'designation' => 'Designation',
                    'facebook' => 'FB',
                    'twitter' => 'TW',
                    'instagram' => 'IG',
                    'linkedin' => 'Ld',
                    'image' => 'https://img.freepik.com/free-photo/handsome-smiling-man-looking-with-disbelief_176420-19591.jpg',
                    'status' => 'publish',
                ],
                [
                    'name' => 'Taylor Morgan',
                    'designation' => 'Designation',
                    'facebook' => 'FB',
                    'twitter' => 'TW',
                    'instagram' => 'IG',
                    'linkedin' => 'Ld',
                    'image' => 'https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg',
                    'status' => 'publish',
                ],
                [
                    'name' => 'Sydney Brooks',
                    'designation' => 'Designation',
                    'facebook' => 'FB',
                    'twitter' => 'TW',
                    'instagram' => 'IG',
                    'linkedin' => 'Ld',
                    'image' => 'https://img.freepik.com/free-photo/happy-bearded-man-business-clothes-looking-camera_171337-11392.jpg',
                    'status' => 'publish',
                ],
            ];
            
            DB::table('team_members')->insert($team);
    
    }
}
