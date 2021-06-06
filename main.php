<?php 
// $name = 'tanaka';

// define('NAME', 'hayashi'); defineで値を再定義できる。
// define('NAME', 'tanabe'); define同士は再定義できない。

const NAME = 'hayashi'; //constもdefineと同様。
const NAME = 'tanabe';

echo NAME . PHP_EOL;
