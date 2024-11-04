<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
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
            // $img = 'pictures/' . $randID . '.jpg';
            Gallery::create([
                'title' => 'Gallery',
                'type' => 'image',
                'status' => 'draft',
                'image' => 'https://picsum.photos/id/' . $randID . '/200/300/',
                'cat_id' => '1',
            ]);
        }
    }
}
