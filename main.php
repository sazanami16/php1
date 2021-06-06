<?php

function showAd($message = 'Ad') // 仮引数
{
  echo '----------' . PHP_EOL;
  echo '----' . $message . '----' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header Ad'); //実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
// showAd('Ad');
showAd(); //実引数がない場合は、上記の仮引数の「== 'Ad'」がデフォルト値として表示される。
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer Ad');
