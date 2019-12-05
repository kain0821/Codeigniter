<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://yasuharablog.com/static/css/stylesheet.css">
        <title>ブログの編集</title>
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
                    <a class="detail" href="http://yasuharablog.com/blog/detail">
                        一覧
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="contents">
                <div class="top">
        			<h2>ブログの編集<h2>
				</div>
				<div class="edit">
        			<form action="http://yasuharablog.com/blog/update" method="POST">
            		<p>ブログのタイトル：</p>
            			<input class="blog-title" type="text" name="title" value="
                			<?php
                    			echo $blogs['title'];
                			?>
            			">
            		<p>ブログの内容：</p>
            			<textarea class="blog-contents" name="contents">
                			<?php
                    			echo $blogs['contents'];
                			?>
            			</textarea>
            			<input type="hidden" name="id" value="
                			<?PHP
                				echo $blogs['id'];
                			?>
            			">
            			<input class="blog-submit" type="submit" value="更新">
        			</form>
				</div>
			</div>
		</div>

    </body>

</html>
