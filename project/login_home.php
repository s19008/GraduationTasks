<?php
session_start();

require_once './login/classes/UserLogic.php';

//$result = UserLogic::checkLogin();
//if($result) {
//header('Location: mypage.php');
//return;
//}

$err = $_SESSION;

$result = UserLogic::checkLogin();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>ひまッチ</title>
</head>

<body>
  <header class="top-header">
    <div class="top-header-inner">
      <h1 class="top-header-logo"><a class="top-logo-text" href="#">ひまッチ</a></h1>
      <!-- /.header-logo -->
      <nav class="top-header-nav">
        <ul class="top-nav-list">
          <li class="top-list-item"><a class="item-btn" href="search.php">検索</a></li>
          <!-- /.list-item -->
          <li class="top-list-item"><a class="item-btn" href="blog/blog_home.php">投稿</a></li>
          <!-- /.list-item -->
          <li class="top-list-item"><a class="item-btn" href="mypage.php">マイページ</a></li>
          <!-- /.list-item -->
        </ul>
        <!-- /.nav-list -->
      </nav>
      <!-- /.header-nav -->
    </div>
    <!-- /.header-inner -->
  </header>
  <!-- /.header -->
  <main class="main">
    <div class="main-visual">
      <div class="main-visual-wrapper">
        <h2 class="main-visual-title">
          趣味の合う友達が探せる<br />マッチングアプリ
        </h2>
        <p class="main-visual-text">ひまッチ</p>
        <!-- /.main-visual-text -->
        <a href="search.html" class="main-visual-btn">さっそく探してみる</a><!-- /.main-visual-btn -->
      </div>
      <!-- /.main-visual-wrapper -->
    </div>
    <!-- /.main-visual -->
    <div id="modal" class="modal">
      <div class="modal-bg modal-close"></div>
      <!-- /.modal-bg -->
      <div class="modal-wrap">
        <h2 class="section-title">Login</h2>
        <!-- /.section title -->
        <div class="modal-box">
          <form action="./login.php" class="login-form" method="POST">
            <a id="close-btn" class="close-btn modal-close">×</a><!-- /.close-btn -->
            <input id="email" type="text" name="email" placeholder="メールアドレス" />
            <?php if (isset($err['email'])) : ?>
              <p><?php echo $err['email']; ?></p>
            <?php endif; ?>
            <?php if (isset($err['msg'])) : ?>
              <p><?php echo $err['msg']; ?></p>
            <?php endif; ?>
            <input id="password" type="password" name="password" placeholder="パスワード" />
            <?php if (isset($err['password'])) : ?>
              <p><?php echo $err['password']; ?></p>
            <?php endif; ?>
            <p class="modal-text">
              <a href="#">パスワードをお忘れですか？</a>
            </p>
            <!-- /.modal-text -->
            <button class="submit" type="submit" id="login-button">
              Login
            </button>
            <p class="register-link"><a href="./signup.php">新規登録</a></p>
            <!-- /.register-link -->
          </form>
          <!-- /.login-form -->
        </div>
        <!-- /.modal-box -->
      </div>
      <!-- /.modal-wrap -->
    </div>
    <!-- /.modal -->
    <section class="about">
      <p class="section-category">About</p>
      <!-- /.section-category -->
      <h2 class="about-title">ひまッチ とは</h2>
      <!-- /.section-title -->
      <p class="about-explanation">
        暇ができた時や、同じ趣味の友達が欲しいとき<br />条件に合った"遊びの"コミュニティを探すことができます。
      </p>
      <!-- /.about-explanation -->
      <div class="contents-wrapper">
        <div class="about-contents">
          <img src="src/image/1055031_magnifying_search_view_icon.svg" alt="探すイメージ画像" class="about-contents-img" />
          <h3 class="about-contents-title">コミュニティを探す</h3>
          <!-- /.about-contents-title -->
          <p class="about-contents-text">
            自分の希望にあった遊びを検索して探せます。
          </p>
          <!-- /.about-contents-text -->
        </div>
        <!-- /.about-contents -->
        <div class="about-contents">
          <img src="src/image/3209296_address_home_homepage_house_resient_icon.svg" alt="作るイメージ画像" class="about-contents-img" />
          <h3 class="about-contents-title">コミュニティを作る</h3>
          <!-- /.about-contents-title -->
          <p class="about-contents-text">
            自分がホストとなって遊びのコミュニティを作ることができます。
          </p>
          <!-- /.about-contents-text -->
        </div>
        <!-- /.about-contents -->
        <div class="about-contents">
          <img src="src/image/7659234_sign in_log in_open_join_icon.svg" alt="参加するイメージ画像" class="about-contents-img" />
          <h3 class="about-contents-title">コミュニティに参加する</h3>
          <!-- /.about-contents-title -->
          <p class="about-contents-text">
            コミュニティ参加後はチャットで遊びの連絡を取り合うことができます。
          </p>
          <!-- /.about-contents-text -->
        </div>
        <!-- /.about-contents -->
      </div>
      <!-- /.contents-wrapper -->
    </section>
    <!-- /.about -->
  </main>
  <!-- /.main -->
  <footer class="footer">
    <p class="copy-right">&copy; 2021 ひまッチ</p><!-- /.copy-right -->
  </footer><!-- /.footer -->
  <script src="src/js/jquery.bgswitcher.js"></script>
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>