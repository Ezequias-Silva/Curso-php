<?php

//$argv é uma variavel global
/*
DIGITE NO TERMINAL
~/curso-php/arrays$ php Argumentos.php Anddroid Web
array(3) {
  [0]=>
  string(14) "Argumentos.php"
  [1]=>
  string(8) "Anddroid"
  [2]=>
  string(3) "Web"
*/

//var_dump($argv);

//EXECUTAR
/*
:~/curso-php/arrays$ php ArgumentosArray.php Anddroid Web
Anddroid
Web
*/

for ($i=1; $i < count($argv); $i++) {
  echo "$argv[$i]".PHP_EOL;
}
