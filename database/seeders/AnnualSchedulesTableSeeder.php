<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnualSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annual_schedules')->insert([
            'month' => 4,
            'schedule' => '春季リーグ開幕',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 5,
            'schedule' => '春季リーグ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 6,
            'schedule' => '新歓合宿',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 7,
            'schedule' => '練習',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 8,
            'schedule' => '全国大会',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 9,
            'schedule' => '秋季リーグ開幕',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 10,
            'schedule' => '秋季リーグ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 11,
            'schedule' => '東日本大会',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 12,
            'schedule' => '追いコン',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 1,
            'schedule' => 'オフ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 2,
            'schedule' => '練習',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('annual_schedules')->insert([
            'month' => 3,
            'schedule' => '春合宿',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
