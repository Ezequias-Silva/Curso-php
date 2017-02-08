<?php

/*
7 - As contas do banco possuem número, saldo e limite. Crie uma classe chamada Conta
para definir os objetos que representarão as contas do banco.
 */
class Conta{
    public $numero;
    public $saldo;
    public $limite;
    public $dono;

}

class Cliente{
  public $nome;
}

$cliente = new Cliente;
$cliente->nome = "Ezequias";
/*
8 - Faça um teste que exiba no Console os valores armazenados nos atributos de um
objeto da classe Conta logo após a sua criação.
*/

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 550;
$conta->limite = 800;

$conta->dono = $cliente;

echo "{$conta->dono->nome}".PHP_EOL;  //use CHAVES quando for passado mais de 1 nivel

/*
echo "Número da conta: $conta->numero".PHP_EOL;
echo "Saldo: $conta->saldo".PHP_EOL;
echo "limite: $conta->limite".PHP_EOL;
*/
