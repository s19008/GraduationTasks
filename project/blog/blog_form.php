<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../src/css/style.css" />
  <title>ChatForm</title>
</head>

<body>
  <section class="chat">
    <h2 class="chat-title">チャットルームを作成する</h2>
    <form class="chat-form" action="blog_create.php" method="POST">
      <div class="chat-form-title">
        <h3 class="room-title">ルームタイトル</h3>
        <input type="text" name="title" />
        <p class="room-content">ルームの概要</p>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
      </div>
      <!-- /.chat-form-title -->
      <div class="chat-form-category">
        <p class="room-category">カテゴリ</p>
        <select class="category-select" name="category">
          <option value="1">日常</option>
          <option value="2">プログラミング</option>
        </select>
      </div>
      <!-- /.chat-form-category -->
      <div class="chat-form-radio">
        <div class="chat-form-radio-btn">
          <input type="radio" name="publish_status" value="1" checked /><label>公開</label>
        </div>
        <!-- /.chat-form-radio-btn -->
        <div class="chat-form-radio-btn">
          <input type="radio" name="publish_status" value="2" /><label>非公開</label>
        </div>
        <!-- /.chat-form-radio-btn -->
      </div>
      <!-- /.chat-form-radio -->
      <input type="submit" value="送信" />
    </form>
    <a href="blog_home.php">戻る</a>
  </section>
  <!-- /.blog-form -->
</body>

</html>