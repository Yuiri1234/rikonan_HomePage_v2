@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/FAQ')
@section('description', '青学りこなんへ頻繁に頂く質問への回答をまとめたページ。Q&A。選手・マネージャーになりたいという方は是非こちらの情報を参考にしてください。')
<link rel="stylesheet" href="/css/details.css">
<link rel="stylesheet" href="/css/animation.css">

@section('content')
    <h3>FAQ</h3>
    <ul class="item">
        <h5>目次</h5>
        <table>
            <th>・ <a href="#all">全体</a></th>
            <th>・ <a href="#player">選手</a></th>
            <th>・ <a href="#manager">マネージャー</a></th>
        </table>
    </ul>
    <h4 id="all">全体</h4>
    <details>
        <summary>Q. どれくらいの頻度で活動していますか？</summary>
        <div class="details-content">
            <p>基本的には週２日程度です。平日１日、土日１日がだいたいですが、公式戦や練習試合があると多少変わります。
                練習時間は午前、午後、夜間(17時～21時くらい)のいずれかで、約４時間程度です。丸１日やることはほぼありません。</p>
        </div>
    </details>
    <details>
        <summary>Q. 部費はいくらかかりますか？</summary>
        <div class="details-content">
            <p>部費は１年単位で2020年は、選手￥15000,マネ￥5000でした。基本大きな変動はありません。</p>
        </div>
    </details>
    <details>
        <summary>Q. 合宿は行われますか？</summary>
        <div class="details-content">
            <p>コロナの影響で2020年は行われませんでしたが、通常は年に２～３回ほど行われます。
                合宿では大会に参加したり、いつもと違う場所でちょっと長めに練習したりします。
                過去には雨天時に体育館を借りて別のスポーツ(バスケ、バレーなど)をしたこともありました。</p>
            <dim class="image">
                <img src="image/gasshuku1.jpg">
                <img src="image/gasshuku2.jpg">
                <img src="image/gasshuku3.jpg">
                <img src="image/gasshuku4.jpg">
                <img src="image/gasshuku5.jpg">
                <img src="image/gasshuku6.jpg">
            </dim>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 兼サーしている人はいますか？</summary>
        <div class="details-content">
            <p>全然います！もちろんここだけの人もたくさんいます。</p>
            <p>詳細は<a href="member.html">こちら</a></p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. どのようなリーグに所属していますか？</summary>
        <div class="details-content">
            <p>首都学生軟式野球連盟というところに所属しています。青山学院大学を含む６大学が所属していて、
                毎年春と秋にリーグ戦をおこなっていて、２位以上でそれぞれ上部大会へつながっています。
                上部大会は負けたら終わりのトーナメント方式です。</p>
            <dim class="image">
                <img src="image/higashi1.jpg">
                <img src="image/higashi2.jpg">
                <img src="image/higashi3.jpg">
            </dim>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 理工軟式野球部というから理工学部しか入っちゃいけないのですか？</summary>
        <div class="details-content">
            <p>名前はそうなっていますが、全然そんなことはありません。相模原キャンパスの他学部の人もいますし、
                青山キャンパスの学部の人もいます。</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. バイトや学業と両立できますか？</summary>
        <div class="details-content">
            <p>基本週２程度なのでそこまで大きな影響が出ることは無いと思います。勉強に関して言えば、
                様々な学部、学科の人がいるのでいろいろとサポートもしてくれるでしょう。(たぶん)</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. どんな学部・学科の人が所属していますか？</summary>
        <div class="details-content">
            <p>現チームメンバーの所属状況をまとめました！</p>
            <p>詳細は<a href="member.html">こちら</a></p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 上下関係は厳しいですか？</summary>
        <div class="details-content">
            <p>部活とサークルの中間くらいの立ち位置なのでとくにそういったことはありません。
                学年問わず仲良くやってます！</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 練習に参加してみたいのですが、どうすればいいですか？</summary>
        <div class="details-content">
            <p>理工軟式野球部の公式アカウント(Twitter,Instagram)または、<a href="contact.html">CONTACTページ</a>があるので、そちらで連絡してみてください。</p>
            <div class="clearfix">
                <div class="container">
                    <a href="https://twitter.com/aoyamariconan" target="_blank">Twitter<br>
                        <img src="image/aoyamariconan_twitter.jpg"></a>
                </div>
                <div class="container">
                    <a href="https://www.instagram.com/aoyama.rikonan/" target="_blank">Instagram<br>
                        <img src="image/aoyama.rikonan49_50_nametag.png"></a>
                </div>
            </div>
        </div>
    </details>

    <h4 id="player">選手</h4>
    <details class="animation">
        <summary>Q. 野球未経験なのですが、大丈夫でしょうか？</summary>
        <div class="details-content">
            <p>ぜんぜん大丈夫です。初心者から高校野球経験者まで様々な人がいます。</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 初心者ってどれくらいいますか？</summary>
        <div class="details-content">
            <p>毎年一人二人程度です。いない年もあります。</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 初心者なのですが、道具一式揃えるにはどれくらいの費用がかかりますか？</summary>
        <div class="details-content">
            <p>公式戦用のユニフォーム(上下一式)と練習着、グローブ、スパイクが最低限必要でしょう。
                値段は物にもよりますが、全部新品でそろえるすると約４～５万円くらいすると思います。
                ただ、以前使っていたものがあったり、友人・先輩などから譲り受けたりすればもう少し値段は
                抑えられると思います。</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 誰でも試合に出られますか？　それともレギュラーが固定されていますか？</summary>
        <div class="details-content">
            <p>練習試合はなるべく多くの選手が出られるようなかたちをとりますが、
                公式戦は勝ちにいくためのメンバーでたたかいます。</p>
        </div>
    </details>

    <h4 id="manager">マネージャー</h4>
    <details class="animation">
        <summary>Q. マネージャーは募集していますか？</summary>
        <div class="details-content">
            <p>大募集中です‼️マネージャー志望大歓迎です!!<br>
                野球を全く知らない方、マネージャー経験0の方でも大丈夫です！少しでも興味がある方は1度体験に来てくれたら嬉しいです！</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. マネージャーの仕事内容が知りたいです。</summary>
        <div class="details-content">
            <p>・スコア記録</p>
            <p>・球出し、球拾い</p>
            <p>・アイシング補助</p>
            <p>・練習道具準備</p>
            <p>・ボール磨き</p>
            <p>・怪我の処置</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. マネージャーの役割、やりがいを教えてください。</summary>
        <div class="details-content">
            <p>試合中ベンチに入ってスコアを書いたり選手のサポートをします。ベンチに必ず入ってもらうのでスタンドから
                見るのとは全く違ったものが見えると思います。プレーヤーと同じ目線で野球が見れるので、選手と一緒に感動が味わえます。
                また、試合や練習で選手の成長する姿を間近で見られるのはマネージャーの特権だと思います‼️ </p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 現役マネージャーの人数</summary>
        <div class="details-content">
            <p>５人です。　参考は<a href="member.html">こちら</a></p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 中高で何部だったか</summary>
        <div class="details-content">
            <p>軽音部、バスケ部、演劇部、茶道部と様々です。</p>
        </div>
    </details>
    <details class="animation">
        <summary>Q. 入部した理由</summary>
        <div class="details-content">
            <p>・野球特にプロ野球が好き</p>
            <p>・野球に関わる部活に入りたい</p>
            <p>・サポートする側の経験を積みたかったから</p>
            <p>・マネージャーへの憧れ</p>
            <p>・りこなんへの一目惚れ</p>
        </div>
    </details>
    <script src="/js/animation.js"></script>
@endsection
