<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>ECサイトのレイアウト</title>
        <link rel="stylesheet" href="./css/layout_login.css">
    </head>
    <body>
        <h1 id="top">新規会員登録</h1>
        <from id="frame">
        <div class="item">
            <p>お名前<span class="color">*</span></p><input type="text" id="name" name="name" style="width:200px; height:25px;"/>
        </div>
        <div class="item">
            <p>フリガナ<span class="color">*</span></p><input type="text" id="namae" name="namae" style="width:200px; height:25px;"/>
        </div>
        <div class="item">
            <p class="item2">性別<span class="color">*</span>
                <input type="radio" name="gender" value="man"/>男性
                <input type="radio" name="gender" value="woman"/>女性
                <input type="radio" name="gender" value="other"/>どちらでもない
            </p>
        </div>
        <div class="item">
            <p class="item2">生年月日<span class="color">*</span>
                <select id="year"><option value="0">----</option></select>年
                <select id="month"><option value="0">--</option></select>月
                <select id="day"><option value="0">--</option></select>日​
            </p>
        </div>

        <div class="item">
            <p>郵便番号<span class="color">*</span></p><input type="text" id="code" name="code" style="width:200px; height:25px;" placeholder="ハイフンなし"/></p>
        <div>
        <div class="item">
            <p>住所<span class="color">*</span></p><input type="text" id="address" name="address" style="width:250px; height:25px;"/></p>
        </div>
        <div class="item">
            <p>電話番号<span class="color">*</span></p><input type="text" id="tel" name="tel" style="width:200px; height:25px;" placeholder="ハイフンなし"/></p>
        </div>
        <div class="item">
            <p>メールアドレス<span class="color">*</span></p><input type="text" id="mail" name="mail" style="width:200px; height:25px;"/></p>
        </div>
        <div class="item">
            <p>パスワード<span class="color">*</span></p><input type="password" name="password" placeholder="パスワードを入力" style="width:200px; height:25px;"/></p>
        </div>
        <div class="item">
            <p>パスワード(確認用)<span class="color">*</span></p><input type="password" name="password" placeholder="パスワードを入力" style="width:200px; height:25px;"/></p>
        </div>
        <div class="item">
            <input type="submit" class="click" value="登録"/>
        </div>
    </form>

    <footer>
        <p>&copy; 2021.01 Rights Reserved.</p>
    </footer>
    </body>
</html>