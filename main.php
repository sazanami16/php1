<?php

$scores = [40, 50, 20, 30];
sort($scores); //昇順に並び替える。
print_r($scores);

shuffle($scores); //ランダムに並び替える。
print_r($scores);

$picked = array_rand($scores, 2); //ランダムに()内で指定した配列の「キー」の情報を取り出す。
echo $scores[$picked[0]] . PHP_EOL; //バリューを取り出したい場合は、[インデックス]で取り出す。
echo $scores[$picked[1]] . PHP_EOL;
