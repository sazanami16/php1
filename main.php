<?php

declare(strict_types=1); 

function getAward(?int $score): ?string //「?」をつけると「null」か「string」で型付けを判断する。引数にも設定できる。「null」かしか判断できない。
{
  return $score >= 100 ? 'Gold Medal' : null; //条件演算子
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;
