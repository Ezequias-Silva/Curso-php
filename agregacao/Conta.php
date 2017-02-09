<?php

class Conta{
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;

  //o construtor obriga a conta ter uma agencia
  public function __construct($agencia){
    $this->agencia = $agencia;
  }
}
