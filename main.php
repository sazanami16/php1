<?php

// substr(文字列, 位置, 桁数)：文字を切り出しを指定できる処理。
// substr_replace(文字列, 置換文字列, 位置, 桁数)：切り出した文字を置換できる処理。


$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);

// $amount = substr($input,16 ,4); //最後の桁数まで切り出す場合は、桁数を省略できる。
$amount = substr($input,16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL; //number_format()で桁にカンマをつける。
