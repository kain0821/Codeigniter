<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://yasuharablog.com/static/css/stylesheet.css">
        <title>ブログの一覧</title>
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
                    <a class="detail" href="http://yasuharablog.com/blog/index">
                        一覧
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="contents">
                <div class="top">
                    <h2>ブログ詳細<h2>
                </div>
                <div class="detail">
                    <div class="blog-title">
                        タイトル: <?php echo $blogs['title']; ?>
                    </div>
                    <div class="blog-contents">
                    内容：<?php echo $blogs['contents']?>
                    </div>
                    <a  class="edit-btn" href="http://yasuharablog.com/blog/edit/<?php echo $blogs['id']; ?>">
                        編集する
                    </a>
                </div>
            </div>
        </div>

    </body>






</html>
