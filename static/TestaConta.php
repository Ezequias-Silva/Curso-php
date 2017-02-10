<?php

require_once 'Conta.php';

echo "Contador: ".Conta::$contadorConta.PHP_EOL;  //acessando o "$contadorConta" da classe "Conta"

$conta = new Conta; //cada NEW é um objeto e toda vez o construtor é chamado
$conta->numero = 11;
$conta->saldo = 600;

$conta2 = new Conta;
$conta2->numero = 12;
$conta2->saldo = 130;

echo "Contador no final: ".Conta::$contadorConta.PHP_EOL;

$conta->zeraContador();
echo "Contador apos zeraContador: ".Conta::$contadorConta.PHP_EOL;
