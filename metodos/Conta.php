<?php

class Conta{
  public $numero;
  public $saldo;
  //public $dataInicioHistorico;

  //essa função será obrigatoriamente passada um numero da conta para realizar as operações
  //toda vez que é criado um objeto, um construtor é chamado
  //CONSTRUTOR obriga o usuario passar os parâmetros
  public function __construct($numero){
    $this->numero = $numero;
  }

  public function deposita($valor){
    $this->saldo += $valor; //this acessa ao atributo 'saldo'
  }


  public function saca($valor){
    if($valor <= $this->saldo){
    $this->saldo -= $valor;
    return true;

  }else{
  return false;
   }
  }

/*
  public function extrato($dataHistorico){
    $this->dataHistorico
  } */
}
