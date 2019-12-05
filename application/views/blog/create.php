<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://yasuharablog.com/static/css/stylesheet.css">
        <title>ブログ作成</title>
    </head>

    <body>
        <header>
            <div class="contents">
                <div class="header-right">
                    <div class="title">
                        php勉強中ブログ
                    </div>
                <div class="header-left">
                    <a class="create" href="http://yasuharablog.com/blog/create">
                        作成
                    </a>
                    <a class="index" href="http://yasuharablog.com/blog/index">
                        一覧
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="contents">
                <div class="top">
                    <h2>ブログ作成<h2>
                </div>
                <div class="created">
                    <form action="http://yasuharablog.com/blog/store" method="POST">
                    <p>タイトル：</p>
                        <input class="blog-title" type="text" name="title"><br><br>
                    <p>内容：</p>
                        <textarea class="blog-contents" name="contents"></textarea><br>
                        <input class="blog-submit" type="submit" value="作成">
                </div>
            </div>
        </div>


    </body>
















</html>
