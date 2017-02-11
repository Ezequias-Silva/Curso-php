<?php

require_once 'Gerente.php';
require_once 'Secretario.php';


$funcionario = new Funcionario;
$funcionario->salario = 5000;

$bonus = $funcionario->calculaBonus().PHP_EOL;

//echo "Bonus: $bonus";

$gerente = new Gerente;
$gerente->nome = "Ezequias";
$gerente->salario = 12000;
$gerente->senha = 123;

$secretario =  new Secretario;
$secretario->nome = "João";
$secretario->salario = 2000;
$secretario->ramal = 6235;

//chama metodo calculaBonus da classe pai (Funcionario)
$bonus = $gerente->calculaBonus();


echo "Nome do gerente: $gerente->nome". PHP_EOL;
echo "Salario do gerente: $gerente->salario". PHP_EOL;
echo "Senha do gerente: $gerente->senha". PHP_EOL;
echo "Bonus do gerente: $bonus".PHP_EOL;
