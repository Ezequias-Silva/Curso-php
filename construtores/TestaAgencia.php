<?php

require_once 'Agencia.php';

$agencia = new Agencia(25);
$agencia->numero = 1234;

$agencia1 = new Agencia(26);
$agencia1->numero = 5678;

echo "Agencia 1: $agencia->numero".PHP_EOL;
echo "Agencia 2: $agencia1->numero".PHP_EOL;
