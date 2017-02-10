<?php
//Faça um programa que ordene o array de strings passado como parâmetros.


asort($argv);
foreach ($argv as $key => $valor) {
  echo "$key = $valor".PHP_EOL;
}

//EXECUTAR
/*
~/curso-php/arrays$ php OrdenaArrays.php PHP Java Android
3 = Android
2 = Java
0 = OrdenaArrays.php
1 = PHP


*/

/*
asort($argv);
for ($i= 1; $i < asort($argv); $i++) {
 echo "$argv[$i]".PHP_EOL;
}
*/
