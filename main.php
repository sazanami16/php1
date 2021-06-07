<?php

$scores = [30, 40, 50, 60, 70, 80];
array_splice($scores, 2, 3);             //array_splice(配列, 位置, 個数)。配列の要素を削除できる。
array_splice($scores, 2, 3, 100);        //array_splice(配列, 位置, 個数, 要素)。配列の要素を削除して、新しい要素を追加できる。
array_splice($scores, 2, 0, [100, 110]); //array_splice(配列, 位置, 個数, [要素, 要素])。要素を複数追加する場合は、[]をつけて指定する必要がある。

print_r($scores);
