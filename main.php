<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

$keys = array_keys($scores); //キーのみ取り出す処理。
print_r($keys);

$values = array_values($scores); //バリューのみ取り出す処理。
print_r($values);

if (array_key_exists('taguchi', $scores) === true) { //配列内に該当のキーが存在するか調べる処理。
  echo 'taguchi is here!' . PHP_EOL;
}

if (in_array(80, $scores) === true) { //配列内に該当の値が存在するか調べる処理。
  echo '80 is here!' . PHP_EOL;
}


echo array_search(70, $scores) . PHP_EOL; //値を検索して対応するキーを調べる処理。
