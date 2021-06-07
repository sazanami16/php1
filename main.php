<?php

$input = ' dot_taguchi ';
$input = trim($input);

echo strlen($input) . PHP_EOL;
echo strpos($input, '_'). PHP_EOL;
$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;
