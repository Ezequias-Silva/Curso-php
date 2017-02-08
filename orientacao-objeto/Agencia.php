<?php
/*
 As agências do banco possuem número. Crie uma classe chamada Agencia para definir os
 objetos que representarão  as agências do banco. */

class Agencia{
  public $agencia;
  public $numero;
}

/*
6 - Faça um teste criando dois objetos da classe Agencia. Altere e exiba no Console
os valores armazenados nos atributos desses objetos. */

$agencia1 = new Agencia;
$agencia1->agencia = 1236-5;
$agencia1->Numero = 2563344;

echo "Agencia: $agencia1->agencia".PHP_EOL;
echo "Numero: $agencia1->Numero".PHP_EOL;
