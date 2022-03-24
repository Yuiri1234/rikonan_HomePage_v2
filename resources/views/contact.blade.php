@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/CONTACT')
@section('description', '青学りこなんへのメールフォーム。SNS(Twitter, Instagram)のアカウントをお持ちでない方はご質問をしてください。練習試合申し込みもこちらからご連絡ください。')
<link rel="stylesheet" href="/css/contact.css">

@section('content')
    <div id="formWrap">
        <h3>お問い合わせ</h3>
        <p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
        <form action="mail.php" method="POST">
            <table class="formTable">
                <tr>
                    <th>ご用件</th>
                    <td><select name="ご用件">
                            <option value="">選択してください</option>
                            <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                            <option value="練習参加希望">練習参加希望</option>
                        </select></td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td><input size="20" type="text" name="お名前" /> ※必須</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input size="30" type="text" name="Email" /> ※必須</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容<br /></th>
                    <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
                </tr>
            </table>
            <p align="center">
                <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
            </p>
        </form>
        <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
    </div>
@endsection
