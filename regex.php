<?php

$file = fopen("./files/results.csv", "r");

$match = 0;
$nomatch = 0;
$t = time();

while (!feof($file)) {
  $line = fgets($file);
  // echo $line;
  // 1913-03-17,England,Wales,4,3,British Championship,Bristol,England,FALSE
  // 2018-06-04,India,Kenya,3,0,Friendly,Mumbai,India,FALSE
  // la bandera i al final es que sea Case Insensitive
  if (preg_match(
    '/^(\d{4}\-\d\d\-\d\d),(.+),(.+),(\d+),(\d+),.*$/i',
    $line,
    $m
  )) {
    // print_r($m);
    if ($m[4] == $m[5]) {
      # code...
      echo "empate: ";
    }elseif ($m[4] > $m[5]) {
      # code...
      echo "local:  ";

    } else {
      # code...
      echo "visitante: ";
    }
    // \t es un tab
    printf("\t%s - %s [%d-%d]\n", $m[2], $m[3], $m[4], $m[5]);
    $match++;
  } else {
    $nomatch++;
    // echo($line);
  }
}

fclose($file);

printf("\n\n match: %d\n nomatch: %d\n", $match, $nomatch);

printf("Tiempo: %d segundos\n", time() - $t);