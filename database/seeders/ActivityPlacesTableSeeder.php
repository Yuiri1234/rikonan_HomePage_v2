<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_places')->insert([
            'type' => 'practice',
            'park_name' => '鹿沼公園',
            'description'=>'一番多く利用する練習場所です。',
            'link'=>'https://www.sagamiharashi-machimidori.or.jp/park/kanuma',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'practice',
            'park_name' => '小山公園',
            'description'=>'鹿沼公園が利用できないときに使う練習場所です。',
            'link'=>'https://www.sagamiharashi-machimidori.or.jp/oyama',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'practice',
            'park_name' => '横山公園',
            'description'=>'試合場所としても利用する球場です。ナイターで使うことが多いです。',
            'link'=>'https://www.sagamiharashi-machimidori.or.jp/park/yokoyama',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'practice',
            'park_name' => '横浜スタジアム',
            'description'=>'横浜スタジアムを借りて活動したことがあります。',
            'link'=>'https://www.yokohama-stadium.co.jp/',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'game',
            'park_name' => '上柚木公園野球場',
            'description'=>'リーグ戦や東日本大会の会場として利用しています。',
            'link'=>'https://www.city.hachioji.tokyo.jp/shisetsu/104/p012126.html',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'game',
            'park_name' => 'サーティーフォー相模原球場',
            'description'=>'リーグ戦で利用することがあります。',
            'link'=>'https://www.sagamiharashi-machimidori.or.jp/park/fuchinobe',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'game',
            'park_name' => 'ダイワハウススタジアム八王子',
            'description'=>'東日本大会で中心的に利用される球場です。',
            'link'=>'https://www.city.hachioji.tokyo.jp/shisetsu/104/p012122.html',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('activity_places')->insert([
            'type' => 'game',
            'park_name' => '大宮健保グラウンド',
            'description'=>'リーグ戦で利用することがあります。',
            'link'=>'https://www.tokyokenpo.jp',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
