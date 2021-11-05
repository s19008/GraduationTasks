<?php
session_start();

require_once './login/classes/UserLogic.php';

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
        <a href="search.php" class="main-visual-btn">さっそく探してみる</a><!-- /.main-visual-btn -->
      </div>
      <!-- /.main-visual-wrapper -->
    </div>
    <!-- /.main-visual -->
    <section class="about-second">
      <p class="section-category">About</p>
      <!-- /.section-category -->
      <h2 class="about-second-title">ひまッチ とは</h2>
      <!-- /.section-title -->
      <p class="about-second-explanation">
        暇ができた時や、同じ趣味の友達が欲しいとき<br />条件に合った"遊びの"コミュニティを探すことができます。
      </p>
      <!-- /.about-explanation -->
      <h3 class="about-second-step"></h3><!-- /.about-second-step -->
      <div class="contents-wrapper">
        <div class="about-second-contents">
          <div class="about-second-contents-expo">
            <h3 class="about-second-contents-expo-title">コミュニティを探す</h3>
            <!-- /.about-contents-title -->
            <p class="about-second-contents-expo-text">
              自分の希望にあった遊びを検索して探せます。
            </p>
            <!-- /.about-contents-text -->
            <a href="search.php" class="about-second-contents-expo-btn">今すぐ探す</a><!-- /.about-second-contents-expo-btn -->
          </div><!-- /.about-second-contents-expo -->
          <div class="about-second-contents-visual">
            <img src="src/image/kylie-lugo-t0BavJY0M-U-unsplash.jpg" alt="探すイメージ画像" class="about-second-contents-visual-img" />
          </div><!-- /.about-secont-contents-link -->
        </div>
        <!-- /.about-contents -->
        <div class="about-second-contents even">
          <div class="about-second-contents-visual">
            <img src="src/image/create-gc4989cf33_1920.jpg" alt="作るイメージ画像" class="about-second-contents-visual-img" />
          </div><!-- /.about-secont-contents-link -->
          <div class="about-second-contents-expo">
            <h3 class="about-second-contents-expo-title">コミュニティを作る</h3>
            <!-- /.about-contents-title -->
            <p class="about-second-contents-expo-text">
              自分がホストとなって遊びのコミュニティを作ることができます。
            </p>
            <!-- /.about-contents-text -->
            <a href="blog/blog_home.php" class="about-second-contents-expo-btn">ホストになる</a><!-- /.about-second-contents-expo-btn -->
          </div><!-- /.about-second-contents-expo -->
        </div>
        <!-- /.about-contents -->
        <div class="about-second-contents">
          <div class="about-second-contents-expo">
            <h3 class="about-second-contents-expo-title">コミュニティに参加する</h3>
            <!-- /.about-contents-title -->
            <p class="about-second-contents-expo-text">
              コミュニティ参加後はチャットで遊びの連絡を取り合うことができます。
            </p>
            <!-- /.about-contents-text -->
            <a href="#" class="about-second-contents-expo-btn">参加する</a><!-- /.about-second-contents-expo-btn -->
          </div><!-- /.about-second-contents-expo -->
          <div class="about-second-contents-visual">
            <img src="src/image/connect-gcc16a62ec_1280.jpg" alt="参加するイメージ画像" class="about-second-contents-visual-img" />
          </div><!-- /.about-secont-contents-link -->
        </div>
        <!-- /.about-contents -->
      </div>
      <!-- /.contents-wrapper -->
    </section>
    <!-- /.about -->
    <section class="example">
      <h2 class="example-title"></h2><!-- /.example-title -->
      <div class="example-inner">

      </div><!-- /.example-inner -->
    </section><!-- /.example -->
  </main>
  <!-- /.main -->
  <footer class="footer">
    <p class="copy-right">&copy; 2021 ひまッチ</p><!-- /.copy-right -->
  </footer><!-- /.footer -->
  <script src="src/js/jquery.bgswitcher.js"></script>
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>