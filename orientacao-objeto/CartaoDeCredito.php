<?php
/*3 - Os bancos oferecem aos clientes a possibilidade de obter um cartão de crédito que pode
ser utilizados para fazer compras. Um cartão de crédito possui um número e uma data de validade.
Crie uma classe chamada CartaoDeCredito para modelar os objetos que representarão os
cartões de crédito. */

class CartaoDeCredito{
  public $numero;
  public $dataValidade;
}

/*
Faça um teste criando dois objetos da classe CartaoDeCredito. Altere e exiba no Console os
valores armazenados nos atributos desses objetos. */

$cartaoDeCredito1 = new CartaoDeCredito;
$cartaoDeCredito1->numero = 111111;
$cartaoDeCredito1->dataValidade = 01/01/2013;

$cartaoDeCredito2 = new CartaoDeCredito;
$cartaoDeCredito2->numero = 222222;
$cartaoDeCredito2->dataValidade = 01/01/2014;


echo "Numero cartão 1: $cartaoDeCredito1->numero".PHP_EOL;
echo "Data validade cartao 1: $cartaoDeCredito1->dataValidade".PHP_EOL;

echo "\n";

echo "Numero cartão 2: $cartaoDeCredito2->numero".PHP_EOL;
echo "Data validade cartao 2: $cartaoDeCredito2->dataValidade".PHP_EOL;
