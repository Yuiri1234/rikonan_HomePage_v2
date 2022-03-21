@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/活動場所')
@section('description', '青学りこなんの活動場所。主な活動場所は相模原キャンパスの最寄りである横浜線淵野辺駅から徒歩約5分の鹿沼公園。授業の合間に活動へ参加も可能。')
<link rel="stylesheet" href="css/details.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <h3>練習場所</h3>
    @foreach($practice_places as $practice_place)
        <details>
            <summary>{{ $practice_place->park_name }}</summary>
            <div class="details-content">
                <p>{{ $practice_place->description }}
                    <a href="{{ $practice_place->link }}">詳細はこちら(外部サイト)</a>
                </p>
            </div>
        </details>
    @endforeach

    <h3>試合場所</h3>
    @foreach($game_places as $game_place)
        <details>
            <summary>{{ $game_place->park_name }}</summary>
            <div class="details-content">
                <p>{{ $game_place->description }}
                    <a href="{{ $game_place->link }}">詳細はこちら(外部サイト)</a>
                </p>
            </div>
        </details>
    @endforeach
@endsection
