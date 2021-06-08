<?php

require('Post.php');

try {

  $posts[0] = new Post('hel');
  $posts[1] = new Post('hello again');
  
  foreach ($posts as $post) {
    $post->show();
  }
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL; //getMessageは、Exceptionメソッドで予め用意されているメソッド。
}
