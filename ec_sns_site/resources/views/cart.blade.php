<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
            <title>カート</title>
            <link rel="stylesheet" href="./css/cart.css">
        </head>
    <body>
        <body>
            <header>
                <h1 class="title">ECサイト</h1>
                <nav class="nav1">
                    <ul>
                        <li class="item"><a href="#">ログイン</a></li>
                        <li class="item"><a href="#">会員情報</a></li>
                        <li class="item"><a href="#">投稿</a></li>
                    </ul>
                </nav>
            </header>
    
            <div id="search">
                <input type="text" class="search"  name="search" style="font-size:25px;" placeholder="キーワードを入力"/>
                <input type="submit" class="click" style="font-size:25px;" value="検索" >
            </div>
            
            <div id="wrapper">
                <nav class="nav2">
                    <ul>
                        <li><a href="#">カテゴリー</a></li>
                        <li><a href="#">再購入</a></li>
                        <li><a href="#">お気に入り</a></li>
                        <li><a href="#">ランキング</a></li>
                        <li><a href="#">新着情報</a></li>
                    </ul>
                </nav>
            </div>

        <h2>カート</h2>
        <div class="frame">
            <div style="margin: 30px;" class="block">
                <div class="category">
                <figure class="image1"><img src="Tshirt.jpeg" alt="Tシャツ" class="tokumei"/></figure>
                <p><a href="#">商品詳細</a></p>
                </div>
                <div>
                <p style="margin: 5px;" class="contributor">Tシャツ</p>
                <p class="sentence">3,000円(込)</p>
                <input type="number" value="0" class="counter1"　min="0">
                <input type="submit" class="cart" style="font-size:25px;" value="削除する" >
                </div>
            </div>
            <hr>
                <div class="total">
                    <p class="left">商品点数</p>
                    <p class="right">1点</p>
                </div>
                <div class="total">
                    <p class="left">内訳</p>
                    <p class="right">商品金額：2,728円<br>消費税：272円</p>
                </div>
                <div class="total" style="font-size:50px;">
                    <p class="left">合計金額</p>
                    <p class="right" style="color: red;font-size:27px;">3,000円(込)</p>
                </div>
                <div class="button">
                <input type="button" class="cash" value="決済へ進む" style="font-size:25px;" >
                </div>
                </div>

            

        <footer>
            <p>&copy; 2021.01 Rights Reserved.</p>
        </footer>
            </body>
    </html>
        