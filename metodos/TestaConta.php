<?php
//null no PHP é falso
require_once 'Conta.php';

$conta = new Conta(25);
$conta->numero = 13;

//chama metodo "deposita"
$conta->deposita(700);

echo "Saldo: $conta->saldo".PHP_EOL;

$resultado = $conta->saca(800);

//echo "Saldo após saque: $conta->saldo".PHP_EOL;


if($resultado){
echo "Saque efetuado com sucesso".PHP_EOL;

}else {
  echo "Saldo insuficiente".PHP_EOL;
}
