<?php

trait LikeTrait
{
  private $likes = 0;

  public function like() 
  {
    $this->likes++;
  }
}


interface LikeInterface  //実装を含めてはいけない
{
  public function like();
}

abstract class BasePost //抽象クラス
{
  abstract public function show(); //抽象メソッド

  protected $text;
  
  public function __construct($text)
  {
    $this->text = $text;
  }
}


class Post extends BasePost implements LikeInterface
{
  use LikeTrait;

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}


class SponsoredPost extends BasePost
{
  private $sponsor;
  
  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }
  
  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}


class PremiumPost extends BasePost implements LikeInterface
{
  private $price;

  use LikeTrait;
  
  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }
  
  public function show()
  {
    printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
  }
}


$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'tanaka');
$posts[3] = new PremiumPost('hello world', 300);

function processLikeable(LikeInterface $likeable)
{
  $likeable->like();
}

processLikeable($posts[0]);
processLikeable($posts[3]);

function processPost(BasePost $post)
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}

