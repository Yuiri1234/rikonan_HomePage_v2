@extends('layout.app')
@include('layout.head')
@section('title', '【公式】青山学院大学理工軟式野球部 りこなん')
@section('description', '青学相模原キャンパスの生徒を中心に活動する軟式野球部。サークルと体育会部活の中間的な団体。真剣かつ楽しく取り組み、勉強やバイトと両立できます。選手、マネージャーどちらも大歓迎。')
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <div class="wrapper">
        <div class="slider">
            @foreach($slider_images as $slider_image)
                <img class="top-image" src="{{ $slider_image->image_path }}" alt="{{ $slider_image->image_name }}">
            @endforeach
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
        @include('articles.introduction')
    </div>
    <div>
        <h2>FROM THE 50th GENERATION</h2>
        @include('articles.from_the_50th_genaration')
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
            @foreach($annual_schedules as $annual_schedule)
                <tr>
                    <th>{{ $annual_schedule->month }}月</th>
                    <td>{{ $annual_schedule->schedule }}</td>
                </tr>
            @endforeach
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



