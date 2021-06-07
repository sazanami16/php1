<?php

$n = 5.6283;

echo ceil($n) . PHP_EOL; //切り上げ
echo floor($n) . PHP_EOL; //切り捨て
echo round($n) . PHP_EOL; //整数で四捨五入
echo round($n, 2) . PHP_EOL; //小数点第2位以下で四捨五入

echo mt_rand(1, 6) .PHP_EOL; //()内で指定された数値の範囲内でランダムで数値が出力される。
echo max(1, 4, 6) .PHP_EOL; //()内の最大値が出力。
echo min(1, 4, 6) .PHP_EOL; //()内の最小値が出力。

echo M_PI . PHP_EOL; //円周率
echo M_SQRT2 .PHP_EOL; //2の平方根
