<?php

////クラス
class Post
{
//プロパティ
  private $text; //「public」,「private」はアクセス修飾子。デフォルトでは「public」
  private static $count = 0;
  public const VERSION = 0.1;

  public function __construct(string $text)
  {
    $this->text = $text;
    self::$count++;
  }

//メソッド
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

  public static function showInfo()
  {
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('VERSION: %.1f' . PHP_EOL, self::VERSION);
  }
}
////クラス

$posts = [];
$posts[0] = new Post('hello'); //インスタンス
$posts[1] = new Post('hello again'); //インスタンス

$posts[0]->show();
$posts[1]->show();

Post::showInfo();

echo Post::VERSION . PHP_EOL;
