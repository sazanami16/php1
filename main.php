<?php

$prices = [100, 200, 300];

$newPrices = array_map(
  function ($n) { return $n * 1.1; }, 
  // fn($n) => $n * 1.1, //returnで値を返すのみの処理の場合、アロー関数を使用できる。
  $prices //第2引数
);

print_r($newPrices);

