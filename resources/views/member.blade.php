@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/部員')
@section('description', '青学りこなんの部員情報を詳細にまとめたページ。学部・学科、第二外国語、野球経験、兼サー数、現役・浪人、アルバイトの頻度、移住形態などをアンケートをもとに掲載。')
<link rel="stylesheet" href="css/member.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <h4>部員数</h4>
    <table class="kaushan">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Player</th>
                <th>Manager</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="top">
                <th>First year</th>
                <td>22</td>
                <td>7</td>
                <td>29</td>
            </tr>
            <tr>
                <th>Second year</th>
                <td>10</td>
                <td>1</td>
                <td>11</td>
            </tr>
            <tr>
                <th>Third year</th>
                <td>10</td>
                <td>2</td>
                <td>12</td>
            </tr>
            <tr class="bottom">
                <th>Total</th>
                <td>42</td>
                <td>10</td>
                <td>52</td>
            </tr>
        </tbody>
    </table>

    <h4>部員へのアンケート</h4>
    <div class="googleSurvey">
        <img src="image/question1.png">
        <img src="image/question2.png" class="animation">
        <img src="image/question3.png" class="animation">
    </div>
    <script src="js/animation.js"></script>
@endsection
