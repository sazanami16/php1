<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

sort($scores); //バリューの値を昇順でソート。ただし、キー情報が出力されない。
print_r($scores);

rsort($scores); //バリューの値を降順でソート。ただし、キー情報が出力されない。
print_r($scores);

asort($scores); //バリューの値を昇順でソート。キー情報も出力される。
print_r($scores);

arsort($scores); //バリューの値を降順でソート。キー情報も出力される。
print_r($scores);

ksort($scores); //キーの値を昇順でソート。バリューの値も出力される。
print_r($scores);

krsort($scores); //キーの値を降順でソート。バリューの値も出力される。
print_r($scores);

