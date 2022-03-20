<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. 画像のスライダーに載せたい画像のデータ書く
        // 2. php artisan migrate:rollback
        // 3. php artisan migrate
        // 4. php artisan db:seed

        DB::table('slider_images')->insert([
            'image_name' => 'hamasuta0',
            'image_path' => 'image/hamasuta0.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image10',
            'image_path' => 'image/image10.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image8',
            'image_path' => 'image/image8.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image9',
            'image_path' => 'image/image9.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image6',
            'image_path' => 'image/image6.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image7',
            'image_path' => 'image/image7.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image0',
            'image_path' => 'image/image0.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image1',
            'image_path' => 'image/image1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image3',
            'image_path' => 'image/image3.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('slider_images')->insert([
            'image_name' => 'image2',
            'image_path' => 'image/image2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
