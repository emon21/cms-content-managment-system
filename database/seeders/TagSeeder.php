<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tag = ['PHP','Laravel','Python','Java','C++','C#','Ruby','Go','Swift','Rust','JavaScript','HTML','CSS'];

        foreach ($tag as $value) {
            DB::table('tags')->insert([
                'name' => $value
            ]);
        }
    }

}
