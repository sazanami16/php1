<?php

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

$scores = array_column($data, 'score'); //scoreのカラムを作成している。
$names = array_column($data, 'name'); //nameのカラムを作成している。

// print_r($scores);
// print_r($names);

array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC,
  $names, SORT_DESC, SORT_STRING,
  $data
);

print_r($data);
