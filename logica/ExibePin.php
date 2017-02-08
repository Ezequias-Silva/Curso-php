
<?php
//Faça um programa que percorra todos os números de 1 até 100. Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, exiba o próprio número.
/*
$contador = 0;
while ($contador <= 100) {
  //echo "$contador".PHP_EOL;
  if(($contador % 4) == 0){
    echo "$contador: PIN".PHP_EOL;
  }else {
    echo "$contador";
  }
  $contador++;
} */



for($i = 1; $i <= 100; $i++){

if($i % 4 == 0){
  echo "PIN => $i".PHP_EOL;

} else {
  echo "$i".PHP_EOL;
  }
}
