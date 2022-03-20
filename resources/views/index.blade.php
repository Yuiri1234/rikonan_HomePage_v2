@extends('layout.app')
@include('layout.head')
@section('title', '【公式】青山学院大学理工軟式野球部 りこなん')
@section('description', '青学相模原キャンパスの生徒を中心に活動する軟式野球部。サークルと体育会部活の中間的な団体。真剣かつ楽しく取り組み、勉強やバイトと両立できます。選手、マネージャーどちらも大歓迎。')
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <div class="wrapper">
        <div class="slider">
            <!--
            ここの写真をfor文で回して、データベースから引っ張ってくる
            slider_image_table
            image_name: string
            image_path: string
            -->
            <img class="top-image" src="image/hamasuta0.jpg" alt="">
            <img class="top-image" src="image/image10.jpg" alt="">
            <img class="top-image" src="image/image8.jpg" alt="">
            <img class="top-image" src="image/image9.jpg" alt="">
            <img class="top-image" src="image/image6.jpg" alt="">
            <img class="top-image" src="image/image7.jpg" alt="">
            <img class="top-image" src="image/image0.jpg" alt="">
            <img class="top-image" src="image/image1.jpg" alt="">
            <img class="top-image" src="image/image2.jpg" alt="">
            <img class="top-image" src="image/image3.jpg" alt="">
        </div>
    </div>
    <script src="js/slick.js"></script>
    <h2>INTRO MOVIE</h2>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/fRWFTrM90RM" frameborder="0" allow="accelerometer;
             autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="goal">
        <h2>GOAL</h2>
        <video src="./movie/goal.mp4" playsinline muted autoplay></video>
    </div>
    <div class="news">
        <h2>WHAT IS NEW</h2>
        <iframe src="/news"></iframe>
    </div>
    <div>
        <h2>INTRODUCTION</h2>
        <p>理工軟式野球部、通称りこなんは練習は明るく楽しく取り組み、春・秋に開催されるリーグ戦では上部大会
            出場を目指しチーム一丸全力で戦います。マネージャーも練習では選手のサポート、試合では声援を送ってくれる
            チームに欠かせない存在です。理工と部活名にありますが、理工学部だけでなく文系学部の学生も在籍しております。
            選手層も幅広く、高校野球経験者から野球初心者の選手まで在籍しております。学友会体育連合会所属のため、
            サークルよりも真剣に部活よりもハッピーオーラ全開で活動しており、野球を楽しみたい人にピッタリです。
            是非私たちと一緒に野球をしましょう。
        </p>
    </div>
    <div>
        <h2>FROM THE 50th GENERATION</h2>
        <p>
            2021年11月22日、東日本学生軟式野球選抜大会準決勝敗退により、りこなん50期生は引退となりました。
            私たちの代は昨年の同大会初戦のサヨナラ負けから始まりました。1年生の頃からスタメンとして出させて
            頂いていたこともあり、この悔しさは今でも鮮明に残っています。<br><br>
            新チームとして新たなスタートを切った私たちは『記録としてもチームとしても歴代最高の代とすること』
            を目標にしました。その矢先に、コロナウイルスの感染拡大により緊急事態宣言が発令され、活動の自粛を
            余儀なくされました。なかなか活動ができない中、急遽開催された春のリーグ戦。2位以上で以前からみんなで
            行きたいと話していた全日本への出場の権利が得られる大会でした。結果は4チーム中3位（1チーム途中棄権
            となったため実質最下位）。どこかで自分たちの実力を過信していた私たちのチーム力の無さが浮き彫りに
            なった大会でした。<br><br>
            この大会をきっかけに私たちの意識はかなり変わったと思います。個々の能力だけでは野球は勝てないという
            ことを自覚し、チーム全員で戦う意識がより一層高まりました。<br>
            嬉しいことに繰り上げによって全日本への出場権を掴み挑んだ全日本1回戦。今までで一番熱い戦いでした。
            結果はタイブレークで9-8で勝利！！過信ではなく、自信を掴んだ試合だったと思います。<br>
            そしてついに迎えた最後の秋のリーグ戦。その最終戦は優勝か引退かがかかった成蹊戦です。3年間で一度も
            成蹊大に勝利することができず、常に準優勝でした。負けたら引退という重圧、一度も勝ったことがない相手と
            いった今までに感じることのなかったプレッシャーが私たちの背中にのしかかりました。
            ですが、その時の私たちは春の私たちとは違いました。チーム全員でもぎ取った1点。それが積み重なり
            最終的には8-2で勝利！優勝が決まった瞬間にマウンドへ集まったときは1年間やってきたことが報われた気が
            しました。<br><br>
            最後の東日本大会は全日本で負けを屈した愛知大学豊橋学舎に準決勝で当たり、結果は昨年と同様、
            サヨナラ負けを屈しました。最後のミーティング、ほとんどの3年生の目に涙が。全員が本気で優勝を目指した
            証です。大学の軟式野球部でこんなにも本気になれるとは思っていませんでした。本気になれた一番の要因は
            個性豊かなこの50期生12人と巡り合えたことです。そんなみんなとかわいい後輩たちと作り上げたこのチーム。
            間違いなく「歴代最高のチーム」です。このみんなと最後の学生野球を堪能することができてほんとに良かった。
            改めて言います。『ありがとう』<br><br><span class="right">理工軟式野球部第50代監督 入澤優太</span><br>
        </p>
        <div>
            <img class="image" src="image/image11.jpg">
        </div>
    </div>
    <div class="annualSchedule">
        <h2>ANNUAL SCHEDULE</h2>
        <table>
            <thead>
            <tr>
                <th>月</th>
                <th>内容</th>
            </tr>
            </thead>
            <tbody>
            <!--
            ここの予定をデータベースに登録し、そこから引っ張ってくる
            annual_schedule_table
            month: int
            schedule: string
            -->
            <tr>
                <th>4月</th>
                <td>春季リーグ開幕</td>
            </tr>
            <tr>
                <th>5月</th>
                <td>春季リーグ</td>
            </tr>
            <tr>
                <th>6月</th>
                <td>新歓合宿</td>
            </tr>
            <tr>
                <th>7月</th>
                <td>練習</td>
            </tr>
            <tr>
                <th>8月</th>
                <td>全国大会</td>
            </tr>
            <tr>
                <th>9月</th>
                <td>秋季リーグ開幕</td>
            </tr>
            <tr>
                <th>10月</th>
                <td>秋季リーグ</td>
            </tr>
            <tr>
                <th>11月</th>
                <td>東日本大会</td>
            </tr>
            <tr>
                <th>12月</th>
                <td>追いコン</td>
            </tr>
            <tr>
                <th>1月</th>
                <td>オフ</td>
            </tr>
            <tr>
                <th>2月</th>
                <td>練習</td>
            </tr>
            <tr>
                <th>3月</th>
                <td>春合宿</td>
            </tr>
            </tbody>
        </table>
        <p>※コロナ禍により予定が変わる場合がございます。</p>
    </div>
    <div class="media" id="sns">
        <h2>MEDIA</h2>
        <div class="container animation">
            <h3>Twitter</h3>
            <a class="twitter-timeline" data-lang="ja" data-height="300"
               href="https://twitter.com/aoyamariconan?ref_src=twsrc%5Etfw">Tweets by aoyamarikonan</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="container_insta animation">
            <h3>Instagram</h3>
            <div class="img_wrap">
                <a href="https://www.instagram.com/aoyama.rikonan/" target="_blank">
                    <img src="image/image5.jpg" style="width:80%; padding: 0 10%;">
                </a>
            </div>
        </div>
    </div>
    <script src="js/animation.js"></script>
@endsection



