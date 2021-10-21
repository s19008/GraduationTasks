<?php
session_start();

require_once './functions.php';
require_once './classes/UserLogic.php';

$result = UserLogic::checkLogin();
if ($result) {
  header('Location: mypage.php');
  return;
}

$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../src/css/style.css" />
  <title>ひまッチ ― 新規登録</title>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo"><a href="index.php">ひまッチ</a></h1>
      <!-- /.header-logo -->
    </div>
    <!-- /.header-inner -->
  </header>
  <!-- /.header -->
  <div class="register-main">
    <h2 class="register-title">新規登録</h2>
    <!-- /.register title -->
    <?php if (isset($login_err)) : ?>
      <p><?php echo $login_err; ?></p>
    <?php endif; ?>
    <form action="register.php" method="POST" class="form">
      <div class="form-item">
        <label class="label" for="name">名前</label>
        <input id="name" type="text" name="name" placeholder="山田　太郎" />
      </div>
      <div class="form-item">
        <label class="label" for="nickname">ニックネーム</label>
        <input id="nickname" type="text" name="nickname" placeholder="たろきち" />
      </div>
      <div class="form-item">
        <label class="label" for="e-mail">e-mail</label>
        <input id="e-mail" type="email" name="email" placeholder="メールアドレスを記入して下さい" />
      </div>
      <div class="form-item">
        <label class="label" for="password">パスワード</label>
        <input id="password" type="password" name="password" placeholder="7文字以上" minlength="7" />
      </div>
      <div class="form-item">
        <label class="label" for="password_conf">パスワード確認</label>
        <input id="password_conf" type="password" name="password_conf" placeholder="7文字以上" />
      </div><!-- /.form-item -->
      <div class="form-item radio">
        <label class="label" for="name">性別</label>
        <input class="radio-btn" id="radio-a" type="radio" name="gender" value="男性" /><label class="gender-label" for="radio-a">男性</label>
        <input class="radio-btn" id="radio-b" type="radio" name="gender" value="女性" /><label class="gender-label" for="radio-b">女性</label><br />
      </div>
      <div class="form-item">
        <label class="label" for="pull-down">年代</label>
        <select class="pull-down" name="pull-down" id="pull-down" placeholder="年代">
          <option value="10years">10代</option>
          <option value="20years">20代</option>
          <option value="30years">30代</option>
          <option value="40years">40代</option>
          <option value="50years">50代</option>
          <option value="60years">60代以上</option>
        </select><!-- /# -->
      </div>
      <!-- /.form-item -->
      <div class="form-item">
        <label for="address" class="label"></label><!-- /.label -->
      </div>
      <!-- /.form-item -->
      <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
      <input type="submit" value="登録">
    </form>
    <!-- /.form -->
    <a href="../index.php">ホームに戻る</a>
  </div>
  <!-- /.register-main -->
  <script text="javascript" src="src/js/script.js"></script>
</body>

</html>