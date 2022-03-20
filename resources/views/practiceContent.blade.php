@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/練習内容')
@section('description', '青学りこなんの練習で何を行うかを掲載。チームが強くなるための連携プレーに力を入れて練習を行います。中学・高校の部活とはまた違う雰囲気の自分たちで考えた練習です。')
<link rel="stylesheet" href="css/details.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <h3 class="fadein">練習メニュー</h3>
    <details class="fadein">
        <summary>各自アップ</summary>
        <div class="details-content">
            <p>練習前に怪我をしないように各自アップを行います。</p>
        </div>
    </details class="fadein">
    <details>
        <summary>キャッチボール・トスバッティング</summary>
        <div class="details-content">
            <p>各自アップの後はキャッチボールを約10分ほど行い、キャッチボールを行った組でトスバッティングを行います。</p>
        </div>
    </details class="fadein">
    <details>
        <summary>外野ノック</summary>
        <div class="details-content">
            <p>休憩をはさみ、内外野合わせて外野のシートノックを行います。</p>
            <p>二塁：3本 三塁：2本 本塁：3本</p>
        </div>
    </details>
    <details class="fadein">
        <summary>内野ノック</summary>
        <div class="details-content">
            <p>外野ノック後は内野ノックに移ります。</p>
            <p>一塁：5本 二塁：3本 本塁：2本</p>
        </div>
    </details>
    <details class="fadein">
        <summary>投内連携</summary>
        <div class="details-content">
            <p>投内連携の練習をしていないために起こるエラーやヒットが前の大会で起こったため、それを減らすべく投内連携の練習を入れます。</p>
        </div>
    </details>
    <details class="fadein">
        <summary>実践ノック</summary>
        <div class="details-content">
            <p>主にこれは外野手の練習で、ランナーを付けた実践的なノックにすることで感覚を身に着けるための練習です。</p>
        </div>
    </details>
    <details class="fadein">
        <summary>1箇所打ち</summary>
        <div class="details-content">
            <p>実際にピッチャーをつけて行う練習です。</p>
        </div>
    </details>
    <details class="fadein">
        <summary>紅白戦</summary>
        <div class="details-content">
            <p>実践していくことが一番の練習だと思うので、紅白戦を行います。</p>
        </div>
    </details>
    <details class="animation">
        <summary>3チーム型紅白戦</summary>
        <div class="details-content">
            <p>人数が18人に満たない時があるのでその時に行う練習です。</p>
            <p>3チームに分けることで15人ほど人がいれば成り立ちます。</p>
        </div>
    </details>
    <script src="js/animation.js"></script>
@endsection
