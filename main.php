<?php

// $scores = [
//   'taguchi' => 80,
//   'hayashi' => 70,
//   'kikuchi' => 60,
// ];

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

usort(
  $data,
  function ($a, $b) {
    if ($a['score'] === $b['score']) {
      return 0;
    }
    return $a['score'] > $b['score'] ? 1 : -1;
  }
);

print_r($data);
