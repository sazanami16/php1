<?php

for ($i = 1; $i <= 10; $i++) {
  // if ($i === 4) {
  //   continue; //continueで4をスキップする記述。ループを一回スキップする処理。
  // }

  // if ($i % 3 === 0) { //3の倍数をスキップする記述。
  //   continue; 
  // }

  if ($i === 4) { //4に達すると4以降の数字は表示されなくなる。
    break; //breakでループを抜け出す処理を記述。
  } 
  echo $i . PHP_EOL;
}

