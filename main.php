<?php

function sum($a, $b, $c)
{
  // echo $a + $b + $c . PHP_EOL; //単純に加算の結果を表示している。
  return $a + $b + $c;  //returnで値を戻して下記の合算された値を表示している。
  echo 'Here!'; //returnで値を戻されてしまうため、return以降は出力されない。
}

// sum(100, 200, 300);
// sum(300, 400, 500);

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;
