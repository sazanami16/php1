<?php

function getStats(...$numbers) //$numbers = [1, 3, 5]と考えられる。
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)]; //返り値を配列にして戻すことができる。[$total //(← $sum), $total / count($numbers) //(← $average)]
}

// print_r(getStats(1, 3, 5));

list($sum, $average) = getStats(1, 3, 5); //「list」によって、分割代入ができるので、()内の要素をそれぞれの変数に戻すことができる。
[$sum, $average] = getStats(1, 3, 5); //上記の「list」と同じ処理を行う。

echo $sum . PHP_EOL;
echo $average . PHP_EOL;
