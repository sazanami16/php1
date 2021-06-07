<?php

$scores = array_fill(0, 5, 10); //左記の場合、[0]から[5]の配列を「10」の要素で埋める処理。
$scores = range(1, 10); //左記の場合、[0]から[9]の配列にそれぞれ「1」から「10」の値を入れる処理。
$scores = range(1, 10, 2); //左記の場合、1~10までの数値を「2」刻みで値を入れる処理。

print_r($scores);

echo array_sum($scores) . PHP_EOL; //配列内の合計。
echo max($scores) . PHP_EOL; //配列内の最大値。
echo min($scores) . PHP_EOL; //配列内の最小値。
echo array_sum($scores) / count($scores) . PHP_EOL; //配列内の平均値。

