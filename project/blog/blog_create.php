<?php
require_once('./blog.php');

$blogs = $_POST;

$blog = new Blog();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css" />
    <title>Create!</title>
</head>

<body>
    <section class="create">
        <?php
        $blog->blogValidate($blogs);
        $blog->blogCreate($blogs);
        ?>
        <a href="blog_home.php" class="create-btn">ブログ一覧に戻る</a><!-- /.create-btn -->
    </section><!-- /.create -->
</body>

</html>