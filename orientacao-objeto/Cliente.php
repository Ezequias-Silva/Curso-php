<?php
//Implemente uma classe para definir os objetos que representarão os clientes de um banco.
//Essa classe deve possuir dois atributos: um para armazenar os nomes e outro para armazenar
//os códigos dos clientes.
class Cliente{
  public $nome;
  public $codigo;
}

//2 - Faça um teste criando dois objetos da classe Cliente. Altere e exiba no Console
//os valores armazenados nos atributos desses objetos.

$cliente1 = new Cliente;
$cliente1->nome = "Ezequias";
$cliente1->codigo = 22263;

$cliente2 = new Cliente;
$cliente2->nome = "Joao";
$cliente2->codigo = 225612;

echo "Nome do cliente: $cliente1->nome".PHP_EOL;
echo "Numero do cliente: $cliente1->codigo".PHP_EOL;

echo "Nome do cliente: $cliente2->nome".PHP_EOL;
echo "Numero do cliente: $cliente2->codigo".PHP_EOL;
