//Faça um programa que percorra todos os números de 1 até 100. Para os números ímpares, deve ser exibido um * e para os números pares **

<?php
$contador = 0;
while($contador <= 100){
 //echo "$contador".PHP_EOL;
 if($contador % 2 == 0){
   echo "$contador é par [**]".PHP_EOL;
 }else {
   echo "$contador é impar [*]".PHP_EOL;
 }
$contador++;
}
