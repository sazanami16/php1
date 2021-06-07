<?php

$scores = [30, 40, 50, 60, 70];
$partial = array_slice($scores, 2); //scores[2]から末尾まで切り出す。末尾まで指定する場合は、桁数を省略できる。
$partial = array_slice($scores, -2); //末尾から2つ切り出す。

print_r($scores);
print_r($partial);
