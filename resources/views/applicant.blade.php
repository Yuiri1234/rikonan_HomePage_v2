@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/部員からのメッセージ')
@section('description', '青学りこなんの選手・マネージャーからのメッセージ。彼らのりこなん愛に溢れるコメントをチェック！')
<link rel="stylesheet" href="css/applicant.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <h3>新入生の皆さまへ</h3>
    <div class="main backBoard">
        <p>
            ご入学おめでとうございます！<br><br>
            私たち理工軟式野球部、通称「りこなん」は首都学生軟式野球連盟に所属し、春と秋にリーグ戦を行います。<br><br>
            基本的に水曜日に淵野辺駅から徒歩5分の場所にある鹿沼公園で練習しています。また、土日に練習試合や公式戦が入ることがあります。
            <span class="red">※東京都が緊急事態宣言下でありますが、活動しております。</span>活動予定は下記のスケジュールからご覧ください。<br>
            <a href="/schedule">スケジュールはこちら</a><br><br>
            理工と部活名にありますが、理工学部だけでなく文系学部の学生も在籍しております。 選手層も幅広く、高校野球経験者から野球初心者の選手まで在籍しております。
            学友会体育連合会所属のため、 サークルよりも真剣に部活よりもハッピーオーラ全開で活動しており、野球を楽しみたい人にピッタリです。<br><br>
            現在、新1, 2年生を募集しております。ご興味を持たれた方は<a href="/index#sns">SNS</a>のDMまたは、<a href="/contact">こちら</a>からご連絡ください。<br>
            ※第１回の入部期間は締め切りました。第２回は6月中になります。<br>
            <span class="right">2021/05/15</span>
        </p>
    </div>
    <h3>紹介動画</h3>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/fRWFTrM90RM" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h3>部員からのメッセージ</h3>
    <div class="main">
        <div class="balloon1 animation">
            <div class="icon"><img src="image/youngman0.png"></div>
            様々な学部学科の人がいて、野球経験もばらばらなので色々な人と関わることができます。
            厳しすぎず緩すぎず野球をやりたい人にぴったりだと思うので気軽に来てみてください！
        </div>
        <div class="balloon2 animation">
            <div class="icon"><img src="image/youngman1.png" class="right"></div>
            青キャンの人でこのメッセージ見てくれてる人はなかなかいないと思うけど、このメッセージを見てくれたそこの青キャンの君！
            これは何かの縁だと青キャンの僕は思ってるよ。是非僕らと野球をしよう！君の入部を心から待ってるよ❤️
        </div>
        <div class="balloon1 animation">
            <div class="icon"><img src="image/youngwoman0.png"></div>
            マネージャーとして選手のサポートをすることにやりがいを感じています。選手への愛情を持って一緒にお仕事をしてくれる子がいたら嬉しいです！
            大学生活を充実させたいなと思っていたら是非1度見学に来てみてください☺️
        </div>
        <div class="balloon2 animation">
            <div class="icon"><img src="image/youngman2.png" class="right"></div>
            野球たのしいよね<br>
        </div>
        <div class="balloon1 animation">
            <div class="icon"><img src="image/youngwoman1.png"></div>
            私は野球経験も見たこともあまりありませんが、マネージャーの先輩方はとても丁寧に仕事を教えてくださるのでだんだん仕事やルールを覚えられてきました！
            他のサークルも掛け持ちしていますがりこなんの仲の良さ、雰囲気の良さはどんなサークル、部活にも負けていないように感じます！
            コロナの影響で現一年生がとても少ないのでぜひりこなんに入ってくれると嬉しいです☺︎
        </div>
        <div class="balloon2 animation">
            <div class="icon"><img src="image/youngman3.png" class="right"></div>
            新入生の皆さんこんにちは！りこなんはとても楽しく、本気で野球もするし、色んな面白いタイプの人間が
            揃っちゃってる部活です！！みんなで楽しく野球しよう！
        </div>
        <div class="balloon1 animation">
            <div class="icon"><img src="image/youngwoman2.png"></div>
            大学でも野球やりたいなって思ってる人！りこなんは野球だけじゃ終わりません！勉強もバイトも遊びも全部充実させられます◎
            青学は野球ができる部活もサークルもたくさんあって迷うと思うけどまずは体験来てみてください！！待ってます☺︎
        </div>
        <div class="balloon2 animation">
            <div class="icon"><img src="image/youngman5.png" class="right"></div>
            優秀な先輩達のお陰で、単位はもらったようなものです。
            バイト、学校、野球全て全力で楽しんで、濃い大学生活を一緒に送りましょう！！
        </div>
    </div>
    <script src="js/animation.js"></script>
@endsection
