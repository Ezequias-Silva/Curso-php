<?php
/*
11 - Em uma escola, além dos alunos temos os funcionários, que também precisam ser
representados em nossa aplicação. Então crie uma classe chamada Funcionario que
contenha dois atributos: o primeiro para o nome e o segundo para o salário dos funcionários.
*/
class Funcionario{
  public $nome;
  public $salario;
}

/*
12 - Crie dois objetos da classe Funcionario. Altere os valores dos atributos desses objetos
e exiba no Console os valores armazenados nesses atributos.
*/

$funcionario1 = new Funcionario;
$funcionario1->nome = "Ezequias Silva";
$funcionario1->salario = 1800.57;

$funcionario2 = new Funcionario;
$funcionario2->nome = "Rafael Cosentino";
$funcionario2->salario = 2000.88;

echo "Nome: $funcionario1->nome".PHP_EOL;
echo "Salario: $funcionario1->salario".PHP_EOL;

echo "\n";

echo "Nome: $funcionario2->nome".PHP_EOL;
echo "Salario: $funcionario2->salario".PHP_EOL;
