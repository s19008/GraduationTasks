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
      <div class="form-item">
        <form action="blog/search_title.php" class="search-title-form" method="GET">
          <input class="search-input" id="word" name="word" type="text" required placeholder="キーワード　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　🔎" />
          <button class="search-btn" type="submit">検索</button>
        </form><!-- /.search-form -->
      </div><!-- /.form-item -->
      <div class="form-item flex">
        <h2 class="form-item-title">年代で探す</h2><!-- /.form-item-title -->
        <form action="./blog/search_age.php" method="GET" class="search-age-form">
          <select class="pull-down" name="age" placeholder="年代">
            <option value="1">10代</option>
            <option value="2">20代</option>
            <option value="3">30代</option>
            <option value="4">40代</option>
            <option value="5">50代</option>
            <option value="6">60代以上</option>
          </select><!-- /# -->
          <button class="search-btn" type="submit">検索</button>
        </form>
      </div><!-- /.form-item -->
      <div class="form-item flex">
        <h2 class="form-item-title">ジャンルで探す</h2><!-- /.form-item-title -->
        <form action="blog/search_category.php" method="GET" class="search-category-form">
          <select class="pull-down" name="category" placeholder="趣味">
            <option value="1">サッカー</option>
            <option value="2">ボウリング</option>
            <option value="3">野球</option>
            <option value="4">テニス</option>
            <option value="5">ゲーム</option>
            <option value="6">カラオケ</option>
          </select><!-- /# -->
          <button class="search-btn" type="submit">検索</button>
        </form>
      </div><!-- /.form-item -->
    </div><!-- /.search-inner -->
  </section>
  <!-- /.search -->
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>