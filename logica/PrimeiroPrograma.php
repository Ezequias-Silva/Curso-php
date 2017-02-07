<?php

/*$resultado = 10 / 3;

echo "10/3: $resultado" . PHP_EOL;

$saldo = 100;

$saldo += 300;

echo "Saldo final: $saldo" . PHP_EOL;

$saldo -= 200;

echo "Saldo após saque: $saldo" . PHP_EOL;


$a = 10;
$b = 20;

$resultado = $a > $b;

$a = 10;
$b = "10 cachorros e 4 gatos";

$resultado = $a == $b;

echo "a == b: $resultado" . PHP_EOL;


$a = 10;
$b = 10;

$resultado = $a === $b;

echo "a === b: $resultado" . PHP_EOL;


$altura = 1.80;

//altura minima para entrar é 1.40
//altura maxima para entrar é 2.40

$resultado = $altura >= 1.40 && $altura <= 2;

echo "$altura >= 1.40 && $altura <= 2: $resultado: " . PHP_EOL;

var_dump($resultado);

$altura = 5.8;

//altura minima para entrar é 1.40
//altura maxima para entrar é 2.40

echo "Altura: $altura" . PHP_EOL;

if($altura >= 1.40 && $altura <= 2){
  echo "Pode entrar" . PHP_EOL;
}else{
  echo "Não pode entrar" . PHP_EOL;
} */


$contador = 0;  //declaração
while ($contador < 100) {  //condição de parada
  echo "Deu onda: $contador". PHP_EOL;
  $contador++;     //incremento
}


for($contador =0; $contador<100; $contador++){
  echo "Deu onda FOR: $contador". PHP_EOL;
}
