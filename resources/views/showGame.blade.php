@php
$top_score = explode(',', $game->top_score);
$bot_score = explode(',', $game->bot_score);

$top_score_sum = 0;
$bot_score_sum = 0;
foreach ($top_score as $top_score_inning){
    $top_score_sum += intval($top_score_inning);
}
foreach ($bot_score as $bot_score_inning){
    $bot_score_sum += intval($bot_score_inning);
}
@endphp

@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/公式戦')
@section('description', '青学りこなんのリーグ戦、東日本大会などの公式戦結果を掲載。')
<link rel="stylesheet" href="/css/game.css">

@section('content')
    <h3>{{ $game->date }} {{ $game->tournament_name }} VS{{ $game->opposing_team }}</h3>
    <p class="gameDetail">◇球場 {{ $game->stadium }}</p>
    <h4>スコア</h4>
    <div class="scroll_wrapper">
        <table>
            <thead>
            <tr>
                <th>&nbsp;</th>
                @for($i=0; $i<count($top_score); $i++ )
                    <th>{{ $i+1 }}</th>
                @endfor
                <td class="total-1">計</td>
                <td class="total-2">H</td>
            </tr>
            </thead>
            <tbody>
            <tr class="top">
                <th><span class="flag_h">{{ $game->top_team }}</span></th>
                @foreach($top_score as $top_score_inning)
                    <td>{{ $top_score_inning }}</td>
                @endforeach
                <td class="total-1">{{ $top_score_sum }}</td>
                <td class="total-2">{{ $game->top_hit_num }}</td>
            </tr>
            <tr class="bottom">
                <th><span class="flag_c">{{ $game->bot_team }}</span></th>
                @foreach($bot_score as $bot_score_inning)
                    <td>{{ $bot_score_inning }}</td>
                @endforeach
                <td class="total-1">{{ $bot_score_sum }}</td>
                <td class="total-2">{{ $game->bot_hit_num }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <h4>試合概要</h4>
    <p>{{ $game->summary }}</p>
@endsection
