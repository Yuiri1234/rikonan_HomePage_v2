@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/活動場所')
@section('description', '青学りこなんの活動場所。主な活動場所は相模原キャンパスの最寄りである横浜線淵野辺駅から徒歩約5分の鹿沼公園。授業の合間に活動へ参加も可能。')
<link rel="stylesheet" href="css/details.css">
<link rel="stylesheet" href="css/animation.css">

@section('content')
    <h3>練習場所</h3>
    <!--
    activity_place_table
    parkName: string
    description: string
    link: string
    -->
    <details>
        <summary>鹿沼公園</summary>
        <div class="details-content">
            <p>一番多く利用する練習場所です。
                <a href="https://www.sagamiharashi-machimidori.or.jp/park/kanuma">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
    <details>
        <summary>小山公園</summary>
        <div class="details-content">
            <p>鹿沼公園が利用できないときに使う練習場所です。
                <a href="https://www.sagamiharashi-machimidori.or.jp/oyama">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
    <details>
        <summary>横山公園</summary>
        <div class="details-content">
            <p>試合場所としても利用する球場です。ナイターで使うことが多いです。
                <a href="https://www.sagamiharashi-machimidori.or.jp/park/yokoyama">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
    <details>
        <summary>横浜スタジアム</summary>
        <div class="details-content">
            <p>横浜スタジアムを借りて活動したことがあります。
                <a href="https://www.yokohama-stadium.co.jp/">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>

    <h3>試合場所</h3>
    <details>
        <summary>上柚木公園野球場</summary>
        <div class="details-content">
            <p>リーグ戦や東日本大会の会場として利用しています。
                <a href="https://www.city.hachioji.tokyo.jp/shisetsu/104/p012126.html">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
    <details>
        <summary>サーティーフォー相模原球場</summary>
        <div class="details-content">
            <p>リーグ戦で利用することがあります。
                <a href="https://www.sagamiharashi-machimidori.or.jp/park/fuchinobe">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
    <details>
        <summary>ダイワハウススタジアム八王子</summary>
        <div class="details-content">
            <p>東日本大会で中心的に利用される球場です。
                <a href="https://www.city.hachioji.tokyo.jp/shisetsu/104/p012122.html">詳細はこちら(外部サイト)</a>
            </p>
        </div>
    </details>
@endsection
