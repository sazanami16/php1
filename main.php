<?php

$moreScores = [
   55,
   72,
   'perfect',
   [90, 42, 88],
];

$scores = [
   90,
   40,
   ...$moreScores,
   100,
];

// print_r($scores);

echo $scores[5][2];

