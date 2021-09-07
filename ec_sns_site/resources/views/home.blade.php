<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>ECサイトのレイアウト</title>
        <link rel="stylesheet" href="./css/home.css">
    </head>
    <body>
        <header>
            <h1 class="title">ECサイト</h1>
            <nav class="nav1">
                <ul>
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

            <h2 "margin-top: 30px;" id="abc">あなたにおすすめの商品</h2>
            　<div style="margin: 30px;" class="recommendation">
                <div class="goods">
                    <figure class="image"><img src="./images/sneaker.jpeg" alt="靴" width="193" height="130"/></figure>
                    <p class="title">スニーカー</p>
                    <p class="price">5,000円（込）</p>
                </div>
                <div class="goods">
                    <figure class="image"><img src="./images/shirt.png" alt="Tシャツ" width="193" height="130"/></figure>
                    <p class="title">Tシャツ</p>
                    <p class="price">3,000円（込）</p>
                </div>
                <div class="goods">
                    <figure class="image"><img src="./images/jeans.jpeg" alt="ジーンズ" width="193" height="130"/></figure>
                    <p class="title">ジーンズ</p>
                    <p class="price">7,000円（込）</p>
                </div>
                <div class="goods">
                    <figure class="image"><img src="./images/wallet.jpeg" alt="財布" width="193" height="130"/></figure>
                    <p class="title">財布</p>
                    <p class="price">15,000円（込）</p>
                </div>
            </div>

            <h2>お気に入りリスト</h2>
            <div style="margin: 30px;" class="recommendation">
            <div class="goods">
                <figure class="image"><img src="./images/earphone.png" alt="イヤホン" width="193" height="130"/></figure>
                <p class="title">イヤホン</p>
                <p class="price">15,000円（込）</p>
            </div>
            <div class="goods">
                <figure class="image"><img src="./images/sneaker1.png" alt="スニーカー" width="193" height="130"/></figure>
                <p class="title">スニーカー</p>
                <p class="price">9,000円（込）</p>
            </div>
            <div class="goods">
                <figure class="image"><img src="./images/Rucksack.png" alt="リュックサック" width="193" height="130"/></figure>
                <p class="title">シュックサック</p>
                <p class="price">4,000円（込）</p>
            </div>
            <div class="goods">
                <figure class="image"><img src="./images/clock.jpeg" alt="腕時計" width="193" height="130"/></figure>
                <p class="title">時計</p>
                <p class="price">15,000円（込）</p>
            </div>
        </div>

        <h2>人気商品</h2>
        <div style="margin: 30px;" class="recommendation">
        <div class="goods">
            <figure class="image"><img src="./images/fan.jpeg" alt="扇風機" width="193" height="130"/></figure>
            <p class="title">第1位　扇風機</p>
            <p class="price">3,000円（込）</p>
        </div>
        <div class="goods">
            <figure class="image"><img src="./images/cap.png" alt="キャップ" width="193" height="130"/></figure>
            <p class="title">第2位　キャップ</p>
            <p class="price">2,000円（込）</p>
        </div>
        <div class="goods">
            <figure class="image"><img src="./images/mask.jpeg" alt="マスク" width="193" height="130"/></figure>
            <p class="title">第3位　マスク</p>
            <p class="price">4,000円（込）</p>
        </div>
        <div class="goods">
            <figure class="image"><img src="./images/clock.jpeg" alt="腕時計" width="193" height="130"/></figure>
            <p class="title">第4位 時計</p>
            <p class="price">15,000円（込）</p>
        </div>
    </div>

    <button class="fixed_btn" style="font-size:25px;">カートへ</button>

    <h3>口コミ紹介</h3>
    <div class="word_of_mouth">
        <p id="word">ファッション</p>
        <a href="#">ジャンルの切り替え</a>
        <a href="#">ジャンル選択</a>
        <a href="#">口コミ投稿</a>

    <div style="margin: 30px;" class="block">
        <div class="human">
        <figure class="image1"><img src="./images/tokumei.png" alt="投稿者" class="tokumei"/></figure>
        <p style="margin: 5px;" class="contributor">ファッション大好きさん</p>
        </div>
        <p class="sentence">このTシャツかっこよかったです。また買いたいと思います。</p>
        <img src="./images/Tshirt.jpeg" alt="投稿者" class="toukouphoto" />
    </div>
   
    <div style="margin: 30px;"  class="block">
        <div class="human">
        <figure class="image1"><img src="./images/tokumei.png" alt="投稿者" class="tokumei"/></figure>
        <p class="contributor">おしゃれさん</p>
        </div>
        <p class="sentence">この靴、履きやすいです。別の靴も買いたいです。</p>
        <img src="./images/kutu.png" alt="投稿者" class="toukouphoto"/>
    </div>
    </div>

    <footer>
        <p>&copy; 2021.01 Rights Reserved.</p>
    </footer>
        </body>
</html>