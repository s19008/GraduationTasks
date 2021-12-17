<?php

//①require_onceを使ってみよう！
require_once('blog.php');

$blog = new Blog;
$result = $blog->getById($_GET['id']);

require_once("../env.php");
// DBからデータ(投稿内容)を取得 
// 投稿内容を表示


// DB接続
function connectDB()
{
    $host = DB_HOST;
    $db = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charaset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        echo '失敗です' . $e->getMessage();
        exit();
    }
}


// DBから投稿内容を取得
function select2()
{
    $dbh = connectDB();
    $sql = "SELECT * FROM message inner join blog on message.blog_id = blog.id order by message.time asc";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    return $stmt;
}


// DBから投稿内容を取得(最新の1件)
function select_new()
{
    $dbh = connectDB();
    $sql = "SELECT * FROM message ORDER BY time desc limit 1";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    return $stmt;
}

// DBから投稿内容を登録
function insert()
{
    $dbh = connectDB();
    $sql = "INSERT INTO message (blog_id, name, message, time) VALUES (:blog_id, :name, :message, now())";
    $stmt = $dbh->prepare($sql);
    $params = array(':blog_id' => $_GET['id'], ':name' => $_POST['name'], ':message' => $_POST['message']);
    $stmt->execute($params);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>ブログ詳細</title>
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
    <section class="room">
        <div class="room-detail">
            <h3 class="room-detail-title"><?php echo $result['title'] ?></h3>
            <p class="room-detail-category"><?php echo $blog->setCategoryName($result['category']) ?></p>
            <p class="room-detail-age"><?php echo $blog->setageName($result['age']) ?></p>
            <p class="room-detail-content">詳細：<?php echo $result['content'] ?></p>
            <p class="room-detail-date"><?php echo $result['post_at'] ?></p>
        </div><!-- /.room-detail -->
        <div class="room-chat">
            <div class="room-chat-content">
                <?php
                $stmt = select2();
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $message) {
                    if ($result['id'] == $message['blog_id']) {
                        echo '
                        <div class="chat-line">
                            <p class="user-name">' . $message['name'] . '</p><!-- /.user-name -->
                            <h3 class="user-text">' . $message['message'] . '</h3><!-- /.user-text -->
                            <p class="user-time">' . $message['time'] . '</p><!-- /.user-time -->
                        </div><!-- /.room-chat-content-line -->
                        ';
                        echo nl2br("\n");
                    }
                }

                // 投稿内容を登録
                if (isset($_POST["send"])) {
                    insert();
                    // 投稿した内容を表示
                    $stmt = select_new();
                    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $message) {
                        if ($result['id'] == $message['blog_id']) {
                            echo '
                            <div class="chat-line">
                                <p class="user-name">' . $message['name'] . '</p><!-- /.user-name -->
                                <h3 class="user-text">' . $message['message'] . '</h3><!-- /.user-text -->
                                <p class="user-time">' . $message['time'] . '</p><!-- /.user-time -->
                            </div><!-- /.room-chat-content-line -->
                            ';
                            echo nl2br("\n");
                        }
                    }
                }
                ?>
            </div><!-- /.room-chat-content -->
        </div><!-- /.room-chat -->
        <form class="room-form" method="post">
            <input class="room-form-name" type="text" name="name" placeholder="名前">
            <input class="room-form-message" type="text" name="message" placeholder="おはよう!">
            <button class="room-form-send" name="send" type="submit">送信</button>
        </form>
    </section><!-- /.chat -->
</body>

</html>