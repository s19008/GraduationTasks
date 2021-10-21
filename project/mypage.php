<?php
session_start();
require_once './login/classes/UserLogic.php';
require_once './login/functions.php';

//　ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
  $_SESSION['login_err'] = 'ユーザを登録してログインしてください！';
  header('Location: signup.php');
  return;
}

$login_user = $_SESSION['login_user'];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/css/style.css" />
  <title>ひまッチ ― マイページ</title>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo"><a href="login_home.php">ひまッチ</a></h1>
      <!-- /.header-logo -->
      <nav class="header-nav">
        <ul class="nav-list">
          <li class="list-item"><a class="item-btn" href="search.php">検索</a></li>
          <!-- /.list-item -->
          <li class="list-item"><a class="item-btn" href="blog/blog_home.php">投稿</a></li>
          <!-- /.list-item -->
          <li class="list-item"><a class="item-btn" href="mypage.php">マイページ</a></li>
          <!-- /.list-item -->
        </ul>
        <!-- /.nav-list -->
      </nav>
      <!-- /.header-nav -->
    </div>
    <!-- /.header-inner -->
  </header>
  <!-- /.header -->
  <section class="mypage-wrapper">
    <div class="acount-inner">
      <div class="acount-data">
        <h3 class="acount-data-favorite">Favorite</h3><!-- /.acount-data-text-favorite -->
        <ul class="acount-data-list">
          <li>サッカー</li>
          <li>ゲーム</li>
        </ul><!-- /.acount-data-text-favorite -->
      </div><!-- /.acount-favorite -->
      <div class="acount-data">
        <div class="acount-data-icon" style="background-image:url('src/image/football-3471402_1920.jpg');">
        </div><!-- /.acount-inner-icon -->
        <div class="acount-data-text">
          <h2 class="acount-data-text-name"><?php echo h($login_user['name']) ?></h2><!-- /.acount-data-name -->
        </div><!-- /.acount-data-text -->
      </div><!-- /.acount-data -->
    </div><!-- /.acount-inner -->
  </section><!-- /.my-page-wrapper -->
  <form action="./logout.php" method="POST">
    <input type="submit" name="logout" value="ログアウト" />
    <a href="login_home.php">ホームに戻る</a>
  </form>
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>