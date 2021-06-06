<?php

$scores = [
  'first'=> 90,
  'second'=> 40,
  'third'=> 100,
];

foreach ($scores as $score) { //バリューのみ表示。
  echo $score . PHP_EOL;
}

foreach ($scores as $key => $score) { //キーとバリューの表示。
  echo $key . '-' . $score . PHP_EOL;
}
