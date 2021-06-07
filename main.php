<?php

$scores = [30, 40, 50];
array_unshift($scores, 10, 20); //先頭に要素を追加。
array_push($scores, 60, 70); //最後尾に要素を追加。
$scores[] = 80;

array_shift($scores); //要素の先頭を削除。
array_pop($scores); //要素の最後尾を削除。

print_r($scores);

