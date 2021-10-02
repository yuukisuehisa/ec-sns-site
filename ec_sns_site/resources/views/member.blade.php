<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>会員情報</title>
        <link rel="stylesheet" href="./css/members.css">
    </head>
    <body>
        <h1 style="margin: 30px;">会員情報</h1>

        <table border="1">
            <tr>
              <td class="item">お名前</td><td>{{$data->name}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
              <td class="item">フリガナ</td><td>{{$data->name_kana}}</td><td><input type="button" value="変更"　class="change style="text-align: right;"/></td>
            </tr>
            <tr>
                <td class="item">性別</td><td>{{$data->seibetu}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
                <td class="item">生年月日</td><td>{{date("Y年m月d日",strtotime($data->seinengappi))}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
                <td class="item">郵便番号</td><td>{{$data->code}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
                <td class="item">住所</td><td>{{$data->address}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
                <td class="item">電話番号</td><td>{{$data->phonenumber}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
              <tr>
                <td class="item">メールアドレス</td><td>{{$data->mailaddress}}</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
            <tr>
                <td class="item">パスワード</td><td>******</td><td><input type="button" value="変更"　class="change/"></td>
            </tr>
          </table>
          
          <footer>
            <p>&copy; 2021.01 Rights Reserved.</p>
        </footer>
            </body>
    </html>