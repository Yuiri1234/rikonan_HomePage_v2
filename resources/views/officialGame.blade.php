@php
function createOutcomeMark($outcome) {
    switch ($outcome) {
        case 'victory':
            return '〇';
        case 'defeat':
            return '●';
        case 'draw':
            return '△';
    }
}

$victory_num = 0;
$defeat_num = 0;
$draw_num = 0;

foreach ($games as $game) {
    $outcome = $game->outcome;
    switch ($outcome) {
        case 'victory':
            $victory_num += 1;
            break;
        case 'defeat':
            $defeat_num += 1;
            break;
        case 'draw':
            $draw_num += 1;
            break;
    }
}
@endphp

@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/公式戦')
@section('description', '青学りこなんのリーグ戦、東日本大会などの公式戦結果を掲載。')
<link rel="stylesheet" href="/css/details.css">

@section('content')
    <h3>公式戦</h3>
    <p class="kaushan">通算：{{ $victory_num }}勝{{ $defeat_num }}敗{{ $draw_num }}分</p>
    @foreach($games as $game)
        <a class="gameName" href="{{ route('showGame', ['game_id'=>$game->id]) }}">{{ $game->date }} {{ $game->tournament_name }}　{{ createOutcomeMark($game->outcome) }}　VS{{ $game->opposing_team }}</a><br>
    @endforeach
@endsection
