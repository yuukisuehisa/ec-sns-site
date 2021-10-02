<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>ECサイトのレイアウト</title>
        <link rel="stylesheet" href="./css/signup.css">
        <script src="js/signup.js"></script> 
    </head>
    <body>
        <h1 id="top">新規会員登録</h1>
        <form action="./signup/entry" method="POST" id"frame2">
        @csrf
        <div class="item">
            <p>メールアドレス<span class="color">*</span></p><input type="text" id="mail" name="mail" style="width:200px; height:25px;"/><p id="mailerror"></p>
        </div>
        <div class="item">
            <p>パスワード<span class="color">*</span></p><input type="password" id="password" name="password" placeholder="パスワードを入力" style="width:200px; height:25px;"/><p id="passworderror"></p>
        </div>
        <div class="item">
            <p>パスワード(確認用)<span class="color">*</span></p><input type="password" id="password2" name="password2" placeholder="パスワードを入力" style="width:200px; height:25px;"/><p id="password2error"></p>
        </div>
        <div class="item">
            <p>お名前<span class="color">*</span></p><input type="text" id="name" name="name" style="width:200px; height:25px;"/><p id="nameerror"></p>
        </div>
        <div class="item">
            <p>フリガナ<span class="color">*</span></p><input type="text" id="namae" name="namae" style="width:200px; height:25px;"/><p id="namaeerror"></p>
        </div>
        <div class="item">
            <p class="item2">性別<span class="color">*</span>
                <input type="radio" name="gender" value="男性"/>男性
                <input type="radio" name="gender" value="女性"/>女性
                <input type="radio" name="gender" value="どちらでもない"/>どちらでもない
            </p>
        </div>
        <div class="item">
            <p class="item2">生年月日<span class="color">*</span>
                <select id="year">
                    <option value="0">----</option>
                    @for ($i = $year; $i > $year-100; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>年
                <select id="month">
                    <option value="0">--</option>
                    @for ($i = 1; $i <= 12; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>月
                <select id="day">
                    <option value="0">--</option>
                    @for ($i = 1; $i <= 31; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>日​
            </p>
            <p id="seinengappierror"></p>
        </div>

        <div class="item">
            <p>郵便番号<span class="color">*</span></p><input type="text" id="code" name="code" style="width:200px; height:25px;" placeholder="ハイフンなし"/><p id="codeerror"></p>
        <div>
        <div class="item">
            <p>住所<span class="color">*</span></p><input type="text" id="address" name="address" style="width:250px; height:25px;"/><p id="addresserror"></p>
        </div>
        <div class="item">
            <p>電話番号<span class="color">*</span></p><input type="text" id="tel" name="tel" style="width:200px; height:25px;" placeholder="ハイフンなし"/><p id="telerror"></p>
        </div>
        <div class="item">
            <input type="button" id="touroku" class="click" value="登録"/>
        </div>
    </form>

    <footer>
        <p>&copy; 2021.01 Rights Reserved.</p>
    </footer>
    </body>
</html>