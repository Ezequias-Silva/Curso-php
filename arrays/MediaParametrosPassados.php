<?php
// Faça um programa que calcule a média dos parâmetros passados como parâmetros.

//php CalculaMedia.php 1 2 3 4 5
//Media e: 3

$soma = 0;   //VARIAVEL local precisa ser inicializada
for ($i=0; $i < count($argv); $i++) {
  $soma += $argv[$i];
}

echo "Media: ($soma/(count($argv)-1))".PHP_EOL;
