<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 5; $i++) {
            # code...


            $id = rand(1, 100);
            TeamMember::create([
                'name' => 'John Doe',
                'designation' => 'CEO',
                'facebook' => 'FB',
                'twitter' => 'TW',
                'instagram' => 'IG',
                'linkedin' => 'Ld',
                'image' => 'https://picsum.photos/id/' . $id . '/200/300/',
                'status' => 'publish',

            ]);
        }
    }
}
