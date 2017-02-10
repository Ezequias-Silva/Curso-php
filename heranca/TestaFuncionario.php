<?php

require_once 'Gerente.php';
require_once 'Secretario.php';

$gerente = new Gerente;
$gerente->nome = "Ezequias";
$gerente->salario = 1200;
$gerente->senha = 123;

$secretario =  new Secretario;
$secretario->nome = "João";
$secretario->salario = 2000;
$secretario->ramal = 6235;


echo "Nome do gerente: $gerente->nome". PHP_EOL;
echo "Salario do gerente: $gerente->salario". PHP_EOL;
echo "Senha do gerente: $gerente->senha". PHP_EOL;
