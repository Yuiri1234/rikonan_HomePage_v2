@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/練習試合')
@section('description', '青学りこなんのリーグ戦、上部大会へ向けての練習試合結果を掲載。練習試合相手も募集中。')
<link rel="stylesheet" href="/css/details.css">

@section('content')
    <h3>練習試合</h3>
    <!--
    うまく書けるように工夫するべき
    -->
    <p class="kaushan">50th　通算：5勝3敗</p>
    <a class="gameName" href="practiceGame/20210830.html">2021/08/30　練習試合　〇　VS立教大学</a><br>
    <a class="gameName" href="practiceGame/20210820.html">2021/08/20　練習試合　〇　VS東京都立大学</a><br>
    <a class="gameName" href="practiceGame/20210818.html">2021/08/18　練習試合　●　VS明治学院大学</a><br>
    <a class="gameName" href="practiceGame/20210809.html">2021/08/09　練習試合　〇　VS留年バスターズ</a><br>
    <a class="gameName" href="practiceGame/20210804.html">2021/08/04　練習試合　●　VS中央大学</a><br>
    <a class="gameName" href="practiceGame/20210802.html">2021/08/02　練習試合　〇　VS専修大学</a><br>
    <a class="gameName" href="practiceGame/20210522.html">2021/05/22　練習試合　〇　VS横浜市立大学</a><br>
    <a class="gameName" href="practiceGame/20210505.html">2021/05/05　練習試合　●　VS青学体育会</a><br>
    <p class="kaushan">49th　通算：1勝0敗</p>
    <a class="gameName" href="practiceGame/20200325.html">2020/03/25　練習試合　〇　VS専修大学</a><br>
@endsection
