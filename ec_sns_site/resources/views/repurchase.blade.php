<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>再購入リスト</title>
        <link rel="stylesheet" href="./css/repurchase.css">
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
        </div>

        <div>
            <h2>再購入リスト</h2>

            <div class="word_of_mouth">
        
            <div style="margin: 30px;" class="block">
                <figure class="image1"><img src="Tshirt.jpeg" alt="Tシャツ" class="tokumei"/></figure>
                <div>
                <p style="margin: 5px;" class="contributor"><a href="#">Tシャツ</a></p>
                <p class="sentence">3,000円（込）</p>
                </div>
                <div class="select">
                <input type="submit" class="cart" style="font-size:25px;" value="カートへ入れる" >
                <input type="submit" class="cart" style="font-size:25px;" value="削除する" >
                </div>
            </div>
           
            <div style="margin: 30px;"  class="block">
                <figure class="image1"><img src="kutu.png" alt="靴" class="tokumei"/></figure>
                <div>
                <p class="contributor"><a href="#">スニーカー</a></p>
                <p class="sentence">8,000円（込）</p>
                </div>
                <div class="select">
                <input type="submit" class="cart" style="font-size:25px;" value="カートへ入れる" >
                <input type="submit" class="cart" style="font-size:25px;" value="削除する" >
                </div>
                </div>
            </div>
            </div>

            <footer>
                <p>&copy; 2021.01 Rights Reserved.</p>
            </footer>
                </body>
        </html>