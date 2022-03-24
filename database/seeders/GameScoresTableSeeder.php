<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_scores')->insert([
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2020-10-04')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '慶應大学',
            'stadium' => '上柚木',
            'top_team' => '慶應大学',
            'bot_team' => '青山学院大学',
            'top_score' => '0,0,0,0,0,0,2',
            'bot_score' => '0,2,1,0,4,0,/',
            'top_hit_num' => 3,
            'bot_hit_num' => 11,
            'summary' => '2回1年村田のタイムリーで先制し、その後も5回に連打で4点を得る。投げては先発岩谷が5回無失点の好投により公式戦初戦を白星で飾る！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2020-10-04')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'defeat',
            'opposing_team' => '成蹊大学',
            'stadium' => '上柚木',
            'top_team' => '成蹊大学',
            'bot_team' => '青山学院大学',
            'top_score' => '2,0,0,5,0,0,0',
            'bot_score' => '0,0,0,0,0,0,2',
            'top_hit_num' => 5,
            'bot_hit_num' => 2,
            'summary' => '初回に打ち取ったあたりも野手の間に落ち先制を許す。4回もエラーなどが重なり突き放される。最終回2点を取り返すも反撃及ばず7-2で敗戦。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
