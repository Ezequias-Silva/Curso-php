<?php
/*

5.3 (spl_autoload_register)

13 - Em uma escola, os alunos precisam ser divididos por turmas, que devem ser representadas
dentro da aplicação. Crie uma classe chamada Turma que contenha quatro atributos: o primeiro
para o período, o segundo para definir a série, o terceiro para sigla e o quarto para o
tipo de ensino.
*/

class Turma{
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;
}

/*
14 - Crie dois objetos da classe Turma. Altere os valores dos atributos desses objetos e
exiba no Console os valores armazenados nesses atributos.
*/

$turma1 = new Turma;
$turma1->periodo = "periodo Tarde";
$turma1->serie = "serie 8";
$turma1->sigla = "sigla A";
$turma1->tipoDeEnsino = "tipoDeEnsino Fundamental";


$turma2 = new Turma;
$turma2->periodo = "periodo Manha";
$turma2->serie = "serie 8";
$turma2->sigla = "sigla A";
$turma2->tipoDeEnsino = "tipoDeEnsino Fundamental";


echo "Periodo: $turma1->periodo".PHP_EOL;
echo "Serie: $turma1->serie".PHP_EOL;
echo "Sigla: $turma1->sigla".PHP_EOL;
echo "Tipo: $turma1->tipoDeEnsino".PHP_EOL;

echo "\n";

echo "Periodo: $turma2->periodo".PHP_EOL;
echo "Serie: $turma2->serie".PHP_EOL;
echo "Sigla: $turma2->sigla".PHP_EOL;
echo "Tipo: $turma2->tipoDeEnsino".PHP_EOL;
