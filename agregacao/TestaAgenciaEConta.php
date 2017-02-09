<?php
require_once 'Agencia.php';
require_once 'Conta.php';
//testa agencia
$agencia = new agencia;
$agencia->numero = 123;

//Testa conta 1
$conta1 = new Conta(123);
$conta1->numero = 1234;
$conta1->saldo = 1000;
$conta1->limite = 500;
$conta1->agencia = $agencia;

$conta2 = new Conta(123);
$conta2->numero = 5678;
$conta2->saldo = 2000;
$conta2->limite = 250;
$conta2->agencia = $agencia;

//exibe resultado conta 1
echo "Agencia: {$conta1->agencia->numero}".PHP_EOL;
echo "Numero da conta: $conta1->numero".PHP_EOL;
echo "Saldo da conta: $conta1->saldo".PHP_EOL;
echo "Limite da conta: $conta1->limite".PHP_EOL;

echo "\n";

//exibe resultado conta 2
echo "Agencia: {$conta1->agencia->numero}".PHP_EOL;
echo "Numero da conta: $conta1->numero".PHP_EOL;
echo "Saldo da conta: $conta1->saldo".PHP_EOL;
echo "Limite da conta: $conta1->limite".PHP_EOL;
