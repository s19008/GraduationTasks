<?php
session_start();

require_once './classes/UserLogic.php';

// エラーメッセージ
$err = [];

// バリデーション
if (!$email = filter_input(INPUT_POST, 'email')) {
  $err['email'] = 'メールアドレスを記入してください。';
}
if (!$password = filter_input(INPUT_POST, 'password')) {
  $err['password'] = 'パスワードを記入してください。';
}

if (count($err) > 0) {
  // エラーがあった場合は戻す
  $_SESSION = $err;
  header('Location: ./index.php');
  return;
}
// ログイン成功時の処理
$result = UserLogic::login($email, $password);
// ログイン失敗時の処理
if (!$result) {
  header('Location: ./index.php');
  return;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/css/style.css">
  <title>ログイン完了</title>
</head>

<body>
  <div class="login-wrapper">
    <h2 class="login-wrapper-title">ログインしました！</h2><!-- /.login-wrapper-text -->
    <a class="login-wrapper-mypage" href="../mypage.php">マイページへ</a>
    <a class="login-wrapper-home" href="../login_home.php">ホーム画面に戻る</a>
  </div><!-- /.login-wrapper -->
</body>

</html>