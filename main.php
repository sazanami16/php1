<?php

$fp = fopen('names.txt', 'w'); //'w'は「write」で書き込みができる。
$fp = fopen('names.txt', 'a'); //'a'は「append」で追記できる。
$fp = fopen('names.txt', 'r'); 
$contents = fread($fp, filesize('names.txt'));

// fwrite($fp, "taro\n"); //UNIX環境の開業は「\n」。
// fwrite($fp, "jiro\n"); //UNIX環境の開業は「\n」。
// fwrite($fp, "saburo\n");

fclose($fp);
echo $contents;

$fp = fopen('names.txt', 'r');
while (($line = fgets($fp)) !== false) {
  echo $line;
}

fclose($fp);
