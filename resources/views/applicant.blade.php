@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/部員からのメッセージ')
@section('description', '青学りこなんの選手・マネージャーからのメッセージ。彼らのりこなん愛に溢れるコメントをチェック！')
<link rel="stylesheet" href="/css/applicant.css">
<link rel="stylesheet" href="/css/animation.css">

@section('content')
    <h3>新入生の皆さまへ</h3>
    <div class="main backBoard">
        @include('articles.dear_new_students')
    </div>
    <h3>紹介動画</h3>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/fRWFTrM90RM" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h3>部員からのメッセージ</h3>
    <div class="main">
        @foreach($member_messages as $member_message)
            <div class="balloon{{ $member_message->balloon }} animation">
                <div class="icon">
                    <img src="{{ $member_message->character_photo }}" class="{{ $member_message->left_right }}">
                </div>
                {{ $member_message->message }}
            </div>
        @endforeach
    </div>
    <script src="/js/animation.js"></script>
@endsection
