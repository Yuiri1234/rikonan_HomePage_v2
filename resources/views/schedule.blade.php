@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/活動予定')
@section('description', '青学りこなんのスケジュール。カレンダーの青字部分をクリックすると内容が表示。詳細日程が知りたい方はCONTACTページからご連絡ください。')
<link rel="stylesheet" href="css/calendar.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

@section('content')
    <div class="wrapper">
        <div id="caleandar"></div>
    </div>

    <script src="js/calendar.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
@endsection
