<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="./css/login.css">
        <script src="js/login.js"></script>
    </head>
        <body>
            <h1>ログイン画面</h1>
            <form action="/login/entry" id ="frame">
            <div id = "id">
                <p class="text">メールアドレス</p>
                <input type="text" id="mail" name="mail" style="width:250px; height:25px;"/><p id="mailerror"></p>
            </div>
            <div id = "pass">
                <p class="text">パスワード</p>
                <input type="password" id="password"  name="password" style="width:250px; height:25px;"/><p id="passworderror"></p>
            </div>
            <div id = "button">
                <input type="button" id="login" value="ログイン"  style="font-size:15px;">
                <p id="label" style="color: #c90505;"></p>
            </div>
            <hr>
            
            <p id="sentence">新規登録をしていない方はこちらへ</p>
            <div id = "button2">
            <input type="button" id="new" value="新規会員登録はこちらへ" style="width:200px; height:50px;"/>
            </div>
            </form>
        </body>
    </html>