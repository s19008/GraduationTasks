<?php
require_once('./blog.php');
// 取得したデータを表示

//$login_user = $_SESSION['login_user'];
$blog = new Blog();
$blogData = $blog->getAll();

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

$dsn = 'mysql:host=localhost;dbname=blog_app';
$username = 'Yo';
$password = 'shinzato13';

if ($_GET) {
    try {
        $dbh = new PDO($dsn, $username, $password);
        $search_word = $_GET['word'];
        if ($search_word == "") {
            echo "文字を入力してください";
        } else {
            $sql = "select * from blog where title like '%" . $search_word . "%' ";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
            if ($result) {
                foreach ($result as $row) {
                }
            } else {
                echo "ブログはありません";
            }
        }
    } catch (PDOException $e) {
        echo  "<p>Failed : " . $e->getMessage() . "</p>";
        exit();
    }
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
                    <li class="list-item"><a class="item-btn" href="../search.php">検索</a></li>
                    <!-- /.list-item -->
                    <li class="list-item"><a class="item-btn" href="blog_home.php">投稿</a></li>
                    <!-- /.list-item -->
                    <li class="list-item"><a class="item-btn" href="../mypage.php">マイページ</a></li>
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
        <h2 class="post-title">検索チャットルーム一覧</h2>
        <div class="post-btn"><a href="./blog_form.php">新規作成</a></div><!-- /.post-btn -->
        <div class="post-inner">
            <?php foreach ($result as $column) : ?>
                <a class="post-inner-contents" href="detail.php?id=<?php echo $column['id'] ?>">
                    <div class="post-inner-contents-visual">
                        <?php if ($column["category"] == 1) : ?>
                            <img src="../src/image/サッカー.jpg" alt="イメージ画像">
                        <?php elseif ($column['category'] == 2) : ?>
                            <img src="../src/image/ボウリング.jpg" alt="イメージ画像">
                        <?php elseif ($column['category'] == 3) : ?>
                            <img src="../src/image/野球.jpg" alt="イメージ画像">
                        <?php elseif ($column['category'] == 4) : ?>
                            <img src="../src/image/テニス.jpg" alt="イメージ画像">
                        <?php elseif ($column['category'] == 5) : ?>
                            <img src="../src/image/ゲーム.jpg" alt="イメージ画像">
                        <?php elseif ($column['category'] == 6) : ?>
                            <img src="../src/image/カラオケ.jpg" alt="イメージ画像">
                        <?php else : ?>
                        <?php endif; ?>
                    </div><!-- /.post-inner-contents-visual -->
                    <div class="post-inner-contents-text">
                        <h2 class="post-inner-contents-text-title"><?php echo h($column['title']) ?></h2>
                        <p class="post-inner-contents-text-category"><?php echo h($blog->setCategoryName($column['category'])) ?></p>
                        <p class="post-inner-contents-text-time"><?php echo h($column['post_at']) ?></p>
                    </div><!-- /.post-inner-contents-text -->
                </a><!-- /.post-inner-contents -->
            <?php endforeach; ?>
        </div>
    </section><!-- /.post -->
</body>

</html>