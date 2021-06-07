<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

preg_match($pattern, $input, $matches); //最初に見つかった結果を表示する。
preg_match_all($pattern, $input, $matches); //全ての見つかった結果を表示する。
print_r($matches); //指定した変数に関する情報を解りやすく出力する。

$input = preg_replace($pattern, '**-****-****', $input); //パターンに応じて置換できる処理。
echo $input . PHP_EOL;
