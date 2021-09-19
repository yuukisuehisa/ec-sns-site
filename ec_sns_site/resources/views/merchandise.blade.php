<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>商品詳細</title>
        <link rel="stylesheet" href="./css/merchandise.css">
    </head>
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

            <h2>イヤホン</h2>
            <div id="item">
                <figure class="image"><img src="earphone.png" alt="イヤホン" width="300px" height="300px"/></figure>
                <p class="title">イヤホン</p>
                <p class="price">15,000円（込）</p>
                <input type="submit" class="cart" style="font-size:25px;" value="カートに入れる" ><hr>
            </div>
            <div class="detail">
                <p>商品詳細</p>
                <p>この商品はスマートフォンやタブレットにも使用できるイヤホン。<br>音楽の再生や一時停止の機能も搭載。絡みにくいコード。</p>
            </div>

            <div id="word_of_mouth" style="margin: 10px;"> 
                <p><a href="#">この商品の口コミを見る</a></p>
                <p><a href="#">この商品のジャンルの口コミを見る</a></p>
            </div>
            <footer>
                <p>&copy; 2021.01 Rights Reserved.</p>
            </footer>
                </body>
        </html>