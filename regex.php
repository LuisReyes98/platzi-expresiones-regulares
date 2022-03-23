<?php

$file = fopen("./files/results.csv", "r");

$match = 0;
$nomatch = 0;

while (!feof($file)) {
  # code...
  $line = fgets($file);
  // echo $line;
  if (preg_match(
    '/^2018-01-(\d\d),.*$/',
    $line,
    $m
  )) {
    print_r($m);
    $match++;
  } else {
    $nomatch++;
  }
}

fclose($file);

printf("\n\n match: %d\n nomatch: %d\n", $match, $nomatch);