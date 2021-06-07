<?php

$a = [3, 4, 8, 9];
$b = [4, 8, 12, 14];

$merged = array_merge($a, $b); //各配列を結合させる処理。
// $merged = [...$a, ...$b];
print_r($merged);

$uniques = array_unique($merged); //各配列の一意の値を出力させる処理。
print_r($uniques);

$diff1 = array_diff($a, $b); //左記の場合、$aの配列と$bの配列の値を比較し、$aにしかない値を出力。
print_r($diff1);

$diff2 = array_diff($b, $a); //左記の場合、$bの配列と$aの配列の値を比較し、$bにしかない値を出力。
print_r($diff2);

$common = array_intersect($a, $b); //左記の場合、$aと$bの配列の値を比較し、共通する値を出力。
print_r($common);
