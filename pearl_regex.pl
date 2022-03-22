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
  if (m/^[\d]{4,4}\-02\-.*$/){
    print $_."\n";
    $match++;
  } else {
    $nomatch++;
  }

}

close($f);

printf("Se encontraron %d matches\d", $match);
