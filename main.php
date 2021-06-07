<?php

$d = [2020, 11, 15];
echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
echo implode('-', $d) . PHP_EOL; //配列の要素を文字列にする。

$t = '17:32:45';
print_r(explode(':', $t)); //文字列を配列にする。
