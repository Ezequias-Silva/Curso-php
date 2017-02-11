<?php

require_once 'Gerente.php';
require_once 'Telefonista.php';
require_once 'Secretaria.php';

$funcionario = new Funcionario;
$funcionario->salario = 15000;

$gerente = new Gerente;
$gerente->nome = "Ezequias";
$gerente->salario = 20000;
$gerente->usuario = "ezequiassilva";
$gerente->senha = 1233;

$telefonista = new Telefonista;
$telefonista->nome = "Katrina";
$telefonista->salario = 5000;
$telefonista->codEstTrab = 26;

$secretaria = new Secretaria;
$secretaria->nome = "Micaela";
$secretaria->salario = 4500;
$secretaria->ramal = 3562;

echo "Nome gerente: $gerente->nome". PHP_EOL;
echo "Salario gerente: $gerente->salario". PHP_EOL;
echo "Usuario gerente: $gerente->usuario". PHP_EOL;
echo "Senha gerente: $gerente->senha". PHP_EOL;

echo "\n";

echo "Nome Telefonista: $telefonista->nome". PHP_EOL;
echo "Salario Telefonista: $telefonista->salario". PHP_EOL;
echo "Codigo de estacao de trabalho: $telefonista->codEstTrab". PHP_EOL;

echo "\n";

echo "Nome Secretaria: $secretaria->nome". PHP_EOL;
echo "Salario Secretaria: $secretaria->salario". PHP_EOL;
echo "Codigo dSecretaria: $secretaria->ramal". PHP_EOL;
