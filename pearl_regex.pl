#!/usr/bin/perl

use strict;
use warnings;

my $t = time;

my $match = 0;
my $nomatch = 0;

open(my $f, "<./files/results.csv" ) or die ("No hay archivo");

while(<$f>){
  # Quita saltos de linea y caracteres raros de la linea
  chomp;
  # el doble // es para usar una expresion regular
  # if (m/^[\d]{4,4}\-02\-.*$/){
  # 1872-11-30,Scotland,England,0,0,Friendly,Glasgow,Scotland,FALSE
  if (m/^([\d]{4,4})\-.*?,(.*?),(.*?),(\d+),(\d+),.*$/){

    # veces que visitante le gano al local
    if($5 > $4){
      printf("%s: %s (%d) - (%d) %s \n",
        $1, $2, $4, $5, $3
      );
    }
    $match++;
  } else {
    $nomatch++;
  }

}

close($f);

printf("Se encontraron \n - %d matches\n - %d no matches \ntardo %d segundos", $match, $nomatch, time() - $t);
