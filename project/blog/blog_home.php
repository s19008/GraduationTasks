<?php
require_once('./blog.php');
// 取得したデータを表示

$blog = new Blog();
$blogData = $blog->getAll();

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>ブログ一覧</title>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <h1 class="header-logo"><a href="../login_home.php">ひまッチ</a></h1>
            <!-- /.header-logo -->
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="list-item">
                        <a class="item-btn" href="../search.php">検索</a>
                    </li>
                    <!-- /.list-item -->
                    <li class="list-item">
                        <a class="item-btn" href="blog/blog_home.php">投稿</a>
                    </li>
                    <!-- /.list-item -->
                    <li class="list-item">
                        <a class="item-btn" href="../mypage.php">マイページ</a>
                    </li>
                    <!-- /.list-item -->
                </ul>
                <!-- /.nav-list -->
            </nav>
            <!-- /.header-nav -->
        </div>
        <!-- /.header-inner -->
    </header>
    <!-- /.header -->
    <section class="post">
        <h2 class="post-title">話題のチャットルーム一覧</h2>
        <div class="post-btn"><a href="./blog_form.html">新規作成</a></div><!-- /.post-btn -->
        <div class="post-inner">
            <?php foreach ($blogData as $column) : ?>
                <div class="post-inner-contents">
                    <div class="post-inner-contents-visual">
                        <img src="../src/image/create-gc4989cf33_1920.jpg" alt="イメージ画像">
                    </div><!-- /.post-inner-contents-visual -->
                    <div class="post-inner-contents-text">
                        <h2 class="post-inner-contents-text-title"><?php echo h($column['title']) ?></h2>
                        <p class="post-inner-contents-text-category"><?php echo h($blog->setCategoryName($column['category'])) ?></p>
                        <p class="post-inner-contents-text-time"><?php echo h($column['post_at']) ?></p>
                    </div><!-- /.post-inner-contents-text -->
                </div><!-- /.post-inner-contents -->
            <?php endforeach; ?>
        </div>
        <a href="./detail.php?id=<?php echo $column['id'] ?> ">詳細</a>
        <a href="./update_form.php?id=<?php echo $column['id'] ?> ">編集</a>
        <a href="./blog_delete.php?id=<?php echo $column['id'] ?> ">削除</a>
    </section><!-- /.post -->
</body>

</html>