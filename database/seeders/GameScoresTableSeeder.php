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
            'generation' => 49,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2020-03-25')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '専修大学',
            'stadium' => '新杉田',
            'top_team' => '青山学院大学',
            'bot_team' => '専修大学',
            'top_score' => '1,0,0,3,0,0,0,0,0',
            'bot_score' => '0,1,0,0,0,0,0,2,0',
            'top_hit_num' => 7,
            'bot_hit_num' => 5,
            'summary' => '初回、相手先発投手の立ち上がりを攻めて1死満塁のチャンスをつくると、主将の5番・外山が中前へ先制の適時打。
      4回には4番・保田の右前2点適時打などで3点を奪った。投手陣は4投手が粘りのリレー。8回にエラーが重なって2点を失ったが、
      各投手要所を締めるピッチングを披露。最後は岩谷がきっちり無失点で抑えて新チーム初戦を勝利で飾った。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 49,
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
            'generation' => 49,
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

        DB::table('game_scores')->insert([
            'generation' => 49,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2020-10-17')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '芝浦工業大学',
            'stadium' => '横山',
            'top_team' => '青山学院大学',
            'bot_team' => '芝浦工業大学',
            'top_score' => '0,0,0,1,1,0,0',
            'bot_score' => '0,0,0,0,0,0,0',
            'top_hit_num' => 1,
            'bot_hit_num' => 2,
            'summary' => '4回にフォアボールからチャンスを作り、相手のエラーで先制。投手陣は芝浦打線を完封。チームは3年連続の東日本大会出場！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-04-18')),
            'tournament_name' => '春季リーグ',
            'outcome' => 'defeat',
            'opposing_team' => '成蹊大学',
            'stadium' => '上柚木',
            'top_team' => '成蹊大学',
            'bot_team' => '青山学院大学',
            'top_score' => '0,0,2,0,0,4,0',
            'bot_score' => '0,3,0,0,0,0,0',
            'top_hit_num' => 5,
            'bot_hit_num' => 5,
            'summary' => '2回裏に長田のライト前安打、北崎のライトオーバーの二塁打なので3点を先制するが、その後3回に2点、5回に4点を失い6-3で敗れた。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-04-18')),
            'tournament_name' => '春季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '芝浦工業大学',
            'stadium' => '上柚木',
            'top_team' => '青山学院大学',
            'bot_team' => '芝浦工業大学',
            'top_score' => '2,1,0,0,0,0,9',
            'bot_score' => '0,0,0,0,0,2,0',
            'top_hit_num' => 10,
            'bot_hit_num' => 4,
            'summary' => '試合が大きく動いたのは最終回。1番北崎の一塁強襲安打などで一死満塁のチャンスを迎えると猪瀬、入澤、井上、斉田、代打吉野の連打などで9得点。投げては先発の中沖が気迫の完投勝利。芝浦打線を寄せ付けなかった。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-05-05')),
            'tournament_name' => '練習試合',
            'outcome' => 'defeat',
            'opposing_team' => '青学体育会',
            'stadium' => '鹿沼',
            'top_team' => 'りこなん',
            'bot_team' => '体育会',
            'top_score' => '2,0,0,0,1,0,0,0,0',
            'bot_score' => '0,0,0,0,2,0,0,3,/',
            'top_hit_num' => 7,
            'bot_hit_num' => 4,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-05-22')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '横浜市立大学',
            'stadium' => '横浜市立大学',
            'top_team' => '横浜市立大学',
            'bot_team' => '青山学院大学',
            'top_score' => '0,0,0,0,0,0,0,0,0',
            'bot_score' => '0,3,0,0,0,0,0,3,/',
            'top_hit_num' => 3,
            'bot_hit_num' => 6,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-06-30')),
            'tournament_name' => '春季リーグ',
            'outcome' => 'defeat',
            'opposing_team' => '慶應大学',
            'stadium' => '鹿沼',
            'top_team' => '慶應大学',
            'bot_team' => '青山学院大学',
            'top_score' => '1,3,0,0,0,0,0',
            'bot_score' => '0,0,3,0,0,0,0',
            'top_hit_num' => 6,
            'bot_hit_num' => 6,
            'summary' => '２回までに４点を先制されるも、３回裏に入澤、長田の連続タイムリーにより３点を取り返した。その後、投手陣は一点も与えず味方の反撃を待つも得点を奪うことはできなかった。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-02')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '専修大学',
            'stadium' => '鹿沼',
            'top_team' => '青山学院大学',
            'bot_team' => '専修大学',
            'top_score' => '2,3,1,1,0,2,4',
            'bot_score' => '0,0,0,0,0,0,0',
            'top_hit_num' => 11,
            'bot_hit_num' => 2,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-04')),
            'tournament_name' => '練習試合',
            'outcome' => 'defeat',
            'opposing_team' => '中央大学',
            'stadium' => '鹿沼',
            'top_team' => '青山学院大学',
            'bot_team' => '中央大学',
            'top_score' => '0,0,0,0,0,0,0,0',
            'bot_score' => '3,0,1,0,0,0,6,/',
            'top_hit_num' => 4,
            'bot_hit_num' => 9,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-09')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '留年バスターズ',
            'stadium' => '陵南',
            'top_team' => '留年バスターズ',
            'bot_team' => '青山学院大学',
            'top_score' => '2,0,0,0,0,0,2,0,0',
            'bot_score' => '0,3,0,0,0,0,0,1,1',
            'top_hit_num' => 4,
            'bot_hit_num' => 5,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-18')),
            'tournament_name' => '練習試合',
            'outcome' => 'defeat',
            'opposing_team' => '明治学院大学',
            'stadium' => '明治学院大学',
            'top_team' => '青山学院大学',
            'bot_team' => '明治学院大学',
            'top_score' => '2,0,0,0,0,0,0,1,1',
            'bot_score' => '3,0,1,1,0,2,0,0,/',
            'top_hit_num' => 8,
            'bot_hit_num' => 9,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-20')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '東京都立大学',
            'stadium' => '陵南',
            'top_team' => '青山学院大学',
            'bot_team' => '東京都立大学',
            'top_score' => '0,0,1,0,4,0,4,6',
            'bot_score' => '0,0,0,1,0,0,2,0',
            'top_hit_num' => 15,
            'bot_hit_num' => 3,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-08-23')),
            'tournament_name' => 'インカレ大学軟式野球全国大会',
            'outcome' => 'victory',
            'opposing_team' => '東亜大学',
            'stadium' => '橿原軟式野球場',
            'top_team' => '青山学院大学',
            'bot_team' => '東亜大学',
            'top_score' => '1,0,1,4,1,1,0,0,1',
            'bot_score' => '3,0,2,0,1,0,0,2,0',
            'top_hit_num' => 10,
            'bot_hit_num' => 10,
            'summary' => '打線は入澤、岡田、斉田による計4つのホームランにより9得点、3人の投手陣が粘り強く投げきり接戦を制した。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-08-25')),
            'tournament_name' => 'インカレ大学軟式野球全国大会',
            'outcome' => 'defeat',
            'opposing_team' => '愛知大学豊橋学舎',
            'stadium' => '橿原軟式野球場',
            'top_team' => '青山学院大学',
            'bot_team' => '愛知大学豊橋学舎',
            'top_score' => '0,0,0,0,1,1,0,1,0',
            'bot_score' => '3,0,0,0,0,1,0,0,/',
            'top_hit_num' => 0,
            'bot_hit_num' => 0,
            'summary' => '満身創痍で迎えた準決勝！初回に点をとられるもチームバッティングで徐々に点差を詰め終盤一点差に！しかしあと一歩及ばず全国ベスト4で全日本大会を終えました！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'practice',
            'date' => date('Y/m/d', strtotime('2021-08-30')),
            'tournament_name' => '練習試合',
            'outcome' => 'victory',
            'opposing_team' => '立教大学',
            'stadium' => '陵南',
            'top_team' => '青山学院大学',
            'bot_team' => '立教大学',
            'top_score' => '0,1,0,0,0,2,0,1,0',
            'bot_score' => '0,1,0,0,0,0,0,0,1',
            'top_hit_num' => 7,
            'bot_hit_num' => 3,
            'summary' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-10-16')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '東京工科大学',
            'stadium' => '大宮健保',
            'top_team' => '青山学院大学',
            'bot_team' => '東京工科大学',
            'top_score' => '2,0,9,0,3',
            'bot_score' => '1,0,0,0,0',
            'top_hit_num' => 10,
            'bot_hit_num' => 0,
            'summary' => '3回表、村田,入澤、北崎,猪瀬,長田,井上,中沖の連続ヒットと岡田のホームランにより試合が大きく動いた。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-10-23')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '日本大学',
            'stadium' => '大宮健保',
            'top_team' => '日本大学',
            'bot_team' => '青山学院大学',
            'top_score' => '0,1,0,0,0',
            'bot_score' => '1,0,0,6,6/',
            'top_hit_num' => 4,
            'bot_hit_num' => 9,
            'summary' => '4、5回に各6点を取る猛攻で2戦連続のコールド勝ち',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-10-30')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'defeat',
            'opposing_team' => '慶應大学',
            'stadium' => '大宮健保',
            'top_team' => '青山学院大学',
            'bot_team' => '慶應大学',
            'top_score' => '0,0,0,0,0,0,1,0,0',
            'bot_score' => '0,0,0,1,1,0,0,0,/',
            'top_hit_num' => 6,
            'bot_hit_num' => 4,
            'summary' => '先発中沖は4、5回に立て続けに失点、その後投手陣は無失点。7回に三浦の適打によって1点を返すも反撃はそこまでで敗戦',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-11-03')),
            'tournament_name' => '秋季リーグ',
            'outcome' => 'victory',
            'opposing_team' => '成蹊大学',
            'stadium' => '陵南',
            'top_team' => '青山学院大学',
            'bot_team' => '成蹊大学',
            'top_score' => '2,2,0,0,0,0,3,0,1',
            'bot_score' => '1,0,0,0,0,0,0,0,1',
            'top_hit_num' => 13,
            'bot_hit_num' => 7,
            'summary' => '4番猪瀬の適打で2点を先制、投手陣は先発三浦がランナーを出しながらも粘りの投球で公式戦初勝利',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-11-21')),
            'tournament_name' => '東日本大会',
            'outcome' => 'victory',
            'opposing_team' => '東海学院大学',
            'stadium' => '上柚木',
            'top_team' => '青山学院大学',
            'bot_team' => '東海学院大学',
            'top_score' => '0,0,0,0,0,1,0,0,1',
            'bot_score' => '0,0,0,0,0,0,1,0,0',
            'top_hit_num' => 8,
            'bot_hit_num' => 2,
            'summary' => '1-1の同点で迎えた9回表、井上の左安打、済田の死球、入澤の犠打、岡田の決勝打により勝ち越し。そのまま9回裏を抑えゲームセット。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('game_scores')->insert([
            'generation' => 50,
            'type' => 'official',
            'date' => date('Y/m/d', strtotime('2021-11-22')),
            'tournament_name' => '東日本大会',
            'outcome' => 'defeat',
            'opposing_team' => '愛知大学豊橋学舎',
            'stadium' => '八王子',
            'top_team' => '青山学院大学',
            'bot_team' => '愛知大学豊橋学舎',
            'top_score' => '0,0,0,0,0,0,0,0,0,0',
            'bot_score' => '0,0,0,0,0,0,0,0,0,1/',
            'top_hit_num' => 3,
            'bot_hit_num' => 5,
            'summary' => '9回で決着がつかず、0死1,2塁から始まるタイブレークへ。表の攻撃で0点で抑えられる、裏の守りで1死2,3塁、相手主将が打った打球が無情にもピッチャー、ショート、セカンドの間を抜けサヨナラ負け。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
