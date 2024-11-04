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
        for ($i = 0; $i < 5; $i++) {
            # code...
            $id = rand(1, 100);
            Partner::create([
                'title' => 'Partner 1',
                'url' => 'https://google.com',
                'image' => 'https://picsum.photos/id/' . $id . '/200/300/',
                'status' => 'publish',

            ]);
        }
    }
}
