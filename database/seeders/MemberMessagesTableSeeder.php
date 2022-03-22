<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_messages')->insert([
            'balloon' => 1,
            'left_right' => 'left',
            'character_photo' => 'image/youngman0.png',
            'message' => '様々な学部学科の人がいて、野球経験もばらばらなので色々な人と関わることができます。厳しすぎず緩すぎず野球をやりたい人にぴったりだと思うので気軽に来てみてください！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 2,
            'left_right' => 'right',
            'character_photo' => 'image/youngman1.png',
            'message' => '青キャンの人でこのメッセージ見てくれてる人はなかなかいないと思うけど、このメッセージを見てくれたそこの青キャンの君！これは何かの縁だと青キャンの僕は思ってるよ。是非僕らと野球をしよう！君の入部を心から待ってるよ❤',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 1,
            'left_right' => 'left',
            'character_photo' => 'image/youngwoman0.png',
            'message' => 'マネージャーとして選手のサポートをすることにやりがいを感じています。選手への愛情を持って一緒にお仕事をしてくれる子がいたら嬉しいです！大学生活を充実させたいなと思っていたら是非1度見学に来てみてください☺',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 2,
            'left_right' => 'right',
            'character_photo' => 'image/youngman2.png',
            'message' => '野球たのしいよね',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 1,
            'left_right' => 'left',
            'character_photo' => 'image/youngwoman1.png',
            'message' => '私は野球経験も見たこともあまりありませんが、マネージャーの先輩方はとても丁寧に仕事を教えてくださるのでだんだん仕事やルールを覚えられてきました！他のサークルも掛け持ちしていますがりこなんの仲の良さ、雰囲気の良さはどんなサークル、部活にも負けていないように感じます！コロナの影響で現一年生がとても少ないのでぜひりこなんに入ってくれると嬉しいです☺',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 2,
            'left_right' => 'right',
            'character_photo' => 'image/youngman3.png',
            'message' => '新入生の皆さんこんにちは！りこなんはとても楽しく、本気で野球もするし、色んな面白いタイプの人間が揃っちゃってる部活です！！みんなで楽しく野球しよう！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 1,
            'left_right' => 'left',
            'character_photo' => 'image/youngwoman2.png',
            'message' => '大学でも野球やりたいなって思ってる人！りこなんは野球だけじゃ終わりません！勉強もバイトも遊びも全部充実させられます◎青学は野球ができる部活もサークルもたくさんあって迷うと思うけどまずは体験来てみてください！！待ってます☺',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('member_messages')->insert([
            'balloon' => 2,
            'left_right' => 'right',
            'character_photo' => 'image/youngman5.png',
            'message' => '優秀な先輩達のお陰で、単位はもらったようなものです。バイト、学校、野球全て全力で楽しんで、濃い大学生活を一緒に送りましょう！！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
