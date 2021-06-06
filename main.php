<?php


function sum($a, $b, $c)
{
  return $a + $b + $c;
}


$sum = function ($a, $b, $c) { //関数自体に名前がないものを「無名関数」もしくは「クロージャー」と呼ぶ。
  return $a + $b + $c;
}; //関数を値として代入する場合は、「;」は必要。
 
echo $sum(100, 300 ,500) . PHP_EOL;
