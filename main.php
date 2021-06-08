<?php

use zazaza\MyPHPApp as zazaza;

require('Post.php'); //処理が止まる
// include('post.php'); //処理が止まらない

// spl_autoload_register(function ($class) { //読み込むファイルが多くなってきたときに自動的に複数のファイルお読み込ませる仕組み。
//   require($class . '.php');
// });

class Post {}

$posts[0] = new zazaza\Post('hello');
$posts[1] = new zazaza\Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
