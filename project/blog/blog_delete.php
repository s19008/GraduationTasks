<?php
ini_set('display_errors', "On");
require_once('./blog.php');

$blog = new Blog;
$result = $blog->delete($_GET['id']);

?>

<p?><a href="blog_home.php">戻る</a></p>