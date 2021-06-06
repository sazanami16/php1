<?php

declare(strict_types=1); //強い型付けの定義。暗黙のデータ変換が行われない。

function showInfo(string $name, int $score): void //弱い型付けの定義。暗黙のデータ変換が行われる。返り値も変更できるが、返り値がない場合は、「void」を使用する。
{
  echo $name . ': ' . $score . PHP_EOL; 
}

showInfo('tanaka', 40); 
showInfo('tanaka', 'tanabe'); //型が異なるので、エラーとなる。
showInfo('tanaka', '40'); //弱い型付けの場合は、暗黙の型変換が行われる。
