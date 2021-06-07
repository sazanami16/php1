<?php

$numbers = range(1, 10);

$eventNumbers = array_filter(
  $numbers,
  function ($n) {
    // if ($n % 2 === 0) {
    //   return true;
    // } else {
    //   return false;
    // }
    return $n % 2 === 0;
  } 
  // fn($n) => $n % 2 === 0
);

print_r($eventNumbers);


