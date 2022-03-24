@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/公式戦')
@section('description', '青学りこなんのリーグ戦、東日本大会などの公式戦結果を掲載。')
<link rel="stylesheet" href="css/details.css">

@section('content')
    <!--
    game_scores_table
    id : integer
    type : string (official or practice)
    date : date
    tournament_name : string
    outcome : string (victory or defeat)
    opposing_team : string
    stadium : string
    top_team : string
    bot_team : string
    top_score : string (,区切り)
    bot_score : string (,区切り)
    top_hit_num : integer
    top_error_num : integer
    bot_hit_num : integer
    bot_error_num : integer
    summary : string
    -->
    <h3>公式戦</h3>
    <p class="kaushan">50th　通算：6勝5敗</p>
    @foreach($games as $game)
        <a class="gameName" href="{{ route('showGame', ['game_id'=>$game->id]) }}">{{ $game->date }} {{ $game->tournament_name }}　●　VS{{ $game->opposing_team }}</a><br>
    @endforeach
    <a class="gameName" href="officialGame/20211122.html">2021/11/22 東日本大会　●　VS愛知</a><br>
    <a class="gameName" href="officialGame/20211121.html">2021/11/21 東日本大会　〇　VS東学</a><br>
    <a class="gameName" href="officialGame/20211103.html">2021/11/03 秋季リーグ　〇　VS成蹊</a><br>
    <a class="gameName" href="officialGame/20211030.html">2021/10/30 秋季リーグ　●　VS慶應</a><br>
    <a class="gameName" href="officialGame/20211023.html">2021/10/23 秋季リーグ　〇　VS日本</a><br>
    <a class="gameName" href="officialGame/20211016.html">2021/10/16 秋季リーグ　〇　VS工科</a><br>
    <a class="gameName" href="officialGame/20210825.html">2021/08/25 インカレ大学軟式野球全国大会　●　VS愛知</a><br>
    <a class="gameName" href="officialGame/20210823.html">2021/08/23 インカレ大学軟式野球全国大会　〇　VS東亜</a><br>
    <a class="gameName" href="officialGame/20210630.html">2021/06/30 春季リーグ　●　VS慶應</a><br>
    <a class="gameName" href="officialGame/20210418_2.html">2021/04/18 春季リーグ　〇　VS芝浦</a><br>
    <a class="gameName" href="officialGame/20210418_1.html">2021/04/18 春季リーグ　●　VS成蹊</a><br>
    <p class="kaushan">49th　通算：2勝1敗</p>
    <a class="gameName" href="officialGame/20201017.html">2020/10/17 秋季リーグ　〇　VS芝浦</a><br>
    <a class="gameName" href="officialGame/20201004_2.html">2020/10/04 秋季リーグ　●　VS成蹊</a><br>
    <a class="gameName" href="officialGame/20201004_1.html">2020/10/04 秋季リーグ　〇　VS慶應</a><br>
@endsection
