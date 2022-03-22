<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubes')->insert([
            'link' => 'https://www.youtube.com/embed/FfBQdDMzM7Y',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('youtubes')->insert([
            'link' => 'https://www.youtube.com/embed/iqipJcNFAr4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('youtubes')->insert([
            'link' => 'https://www.youtube.com/embed/0D8miCcN_OA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('youtubes')->insert([
            'link' => 'https://www.youtube.com/embed/uGbcW_5RBe4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('youtubes')->insert([
            'link' => 'https://www.youtube.com/embed/s3B4xUq0Dng',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
