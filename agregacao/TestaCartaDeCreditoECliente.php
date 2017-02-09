<?php
require_once 'Cliente.php'; //só permite uma inclusão
require_once 'CartaoDeCredito.php';

//ou pode utilizar a funçãoption

//5.3 (spl_autoload_register)

//testa cliente /*
$cliente = new Cliente;
$cliente->nome = "Ezequias";
$cliente->codigo = 17;


//Testa Cartao de credito
$cartao1 = new CartaoDeCredito(1111);
$cartao1->numero = 444;
$cartao1->dataValidade = "12/11/2020";
$cartao1->dono = $cliente;

$cartao2 = new CartaoDeCredito(2222);
$cartao2->numero = 444;
$cartao2->dataValidade = "12/11/2020";
$cartao2->dono = $cliente;

echo "Numero do cartao: $cartao1->numero".PHP_EOL;
echo "Data de validade: $cartao1->dataValidade".PHP_EOL;
echo "Nome do dono: {$cartao1->dono->nome}".PHP_EOL;

echo "\n";

echo "Numero do cartao: $cartao2->numero".PHP_EOL;
echo "Data de validade: $cartao2->dataValidade".PHP_EOL;
echo "Nome do dono: {$cartao2->dono->nome}".PHP_EOL;
