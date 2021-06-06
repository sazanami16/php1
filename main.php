<?php


function sum($a, $b, $c)
{
  $total =  $a + $b + $c;

  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  return $total < 0 ?  0 : $total; //if文の書き換え
  // return 「$total < 0 ?」 ←条件式 「0」←「true」の場合 : 「$total」 ←「false」の場合;
}

echo sum(100, 300, 500) . PHP_EOL;
echo sum(-1000, 300, 500) . PHP_EOL;
