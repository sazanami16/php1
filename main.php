<?php

$hp = 100;

while ($hp > 0) {
  echo " Your HP: $hp" . PHP_EOL;
  $hp -= 15;
}

do {
  echo " Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while ($hp > 0); 

  
