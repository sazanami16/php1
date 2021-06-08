<?php

class Post //継承元のクラス（親クラス）
{
  protected $text; //「protected」によって継承したクラス内でも使用できる。クラス外では使用不可。

  public function __construct($text)
  {
    $this->text = $text;
  }

  final public function show() //「final」をつけてオーバーライドを防ぐ。
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

class SponsoredPost extends Post //継承先のクラス(子クラス)
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function showSponsor()
  {
    printf('%s' . PHP_EOL, $this->sponsor);
  }

  //メソッドのオーバーライド
  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello world', 'tanabe');

$posts[0]->show();
$posts[1]->show();
$posts[2]->show();
$posts[2]->showSponsor();
