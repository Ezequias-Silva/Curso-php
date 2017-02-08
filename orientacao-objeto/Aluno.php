<?php
/*
10 - Crie dois objetos da classe Aluno. Altere os valores dos atributos desses
objetos e exiba no Console os valores armazenados nesses atributos.
*/
class Aluno{
  public $nome;
  public $rg;
  public $dataNascimento;
}

$aluno1 = new Aluno;
$aluno1->nome = "Ezequias Silva";
$aluno1->rg = 33333333-3;
$aluno1->dataNascimento = "02/04/1985";

$aluno2 = new Aluno;
$aluno2->nome = "Rafael Cosentino";
$aluno2->rg =  222222222-2;
$aluno2->dataNascimento = "30/10/1984";

echo "Nome: $aluno1->nome".PHP_EOL;
echo "RG: $aluno1->rg".PHP_EOL;
echo "Data de Nascimento: $aluno1->dataNascimento".PHP_EOL;

echo "\n";
echo "Nome: $aluno2->nome".PHP_EOL;
echo "RG: $aluno2->rg".PHP_EOL;
echo "Data de Nascimento: $aluno2->dataNascimento".PHP_EOL;
