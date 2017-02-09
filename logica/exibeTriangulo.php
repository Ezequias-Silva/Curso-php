//Crie um programa que exiba no Console um triângulo de *

/*
*
**
***
****
***** */

<?php

$linha = "*";
for ($i=0; $i <= 5 ; $i++) {
  echo "$linha".PHP_EOL;
  $linha .= "*";
}
