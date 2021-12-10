<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/css/style.css" />
  <title>ひまッチ ― 検索</title>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo"><a href="login_home.php">ひまッチ</a></h1>
      <!-- /.header-logo -->
      <nav class="header-nav">
        <ul class="nav-list">
          <li class="list-item">
            <a class="item-btn" href="search.php">検索</a>
          </li>
          <!-- /.list-item -->
          <li class="list-item">
            <a class="item-btn" href="blog/blog_home.php">投稿</a>
          </li>
          <!-- /.list-item -->
          <li class="list-item">
            <a class="item-btn" href="mypage.php">マイページ</a>
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
  <section class="search">
    <div class="search-inner">
      <div class="search-inner-title">
        <h2>部屋を探す</h2>
      </div><!-- /.search-inner-title -->
      <form action="blog/search_title.php" class="search-form" method="GET">
        <div class="form-item">
          <input class="search-input" id="word" name="word" type="text" required placeholder="キーワード　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　🔎" />
          <input type="submit" value="検索" />
        </div>
        <!-- /.form-item -->
      </form><!-- /.search-form -->
      <form action="./blog/search_age.php" method="GET">
        <div class="form-item">
          <label class="label" for="pull-down">年代</label>
          <select class="pull-down" name="age" placeholder="年代">
            <option value="1">10代</option>
            <option value="2">20代</option>
            <option value="3">30代</option>
            <option value="4">40代</option>
            <option value="5">50代</option>
            <option value="6">60代以上</option>
          </select><!-- /# -->
          <button type="submit">検索</button>
        </div>
      </form>
      <form action="blog/search_category.php" method="GET">
        <div class="form-item">
          <label class="label" for="pull-down">趣味</label>
          <select class="pull-down" name="category" placeholder="趣味">
            <option value="1">サッカー</option>
            <option value="2">ボウリング</option>
            <option value="3">野球</option>
            <option value="4">テニス</option>
            <option value="5">ゲーム</option>
            <option value="6">カラオケ</option>
          </select><!-- /# -->
          <button type="submit">検索</button>
        </div>
      </form>
      <div class="form-item">
        <label class="label" for="pull-down">時間</label>
        <select class="pull-down" name="pull-down" id="pull-down" placeholder="時間">
          <option value="1time">1時</option>
          <option value="2time">2時</option>
          <option value="3time">3時</option>
          <option value="4time">4時</option>
          <option value="5time">5時</option>
          <option value="7time">7時</option>
          <option value="8time">8時</option>
          <option value="9time">9時</option>
          <option value="10time">10時</option>
          <option value="11time">11時</option>
          <option value="12time">12時</option>
          <option value="13time">13時</option>
          <option value="14time">14時</option>
          <option value="15time">15時</option>
          <option value="16time">16時</option>
          <option value="17time">17時</option>
          <option value="18time">18時</option>
          <option value="19time">19時</option>
          <option value="20time">20時</option>
          <option value="21time">21時</option>
          <option value="22time">22時</option>
          <option value="23time">23時</option>
          <option value="24time">24時</option>
        </select><!-- /# -->
      </div>
    </div><!-- /.search-inner -->
  </section>
  <!-- /.search -->
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>