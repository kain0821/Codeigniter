<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://yasuharablog.com/static/css/stylesheet.css">
        <title>ブログ一覧</title>
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
        			<h2>ブログ一覧</h2>
				</div>
				<table>
					<tr>
						<th>ブログID</th>
						<th>タイトル</th>
						<th>操作</th>
					</tr>
                    <?php
                        if (empty ($blogs)) {
                            echo "ブログなし";
                        } else {
                            foreach ($blogs as $key => $blog) { ?>
						<tr>
							<th><?= $blog['id']; ?></th>
							<th><?= $blog['title']; ?></th>
							<th>
								<a href="http://yasuharablog.com/blog/detail/<?php echo $blog['id']; ?>">
									詳細画面へ
								</a>
							</th>
						</tr>
					<?php }} ?>
				</table>
			</div>
		</div>

    </body>
</html>
