<?php

class CartaoDeCredito{
  public $numero;
  public $dataValidade;
  public $dono;

  //acrescenta um construtor, pois obrigao o cartão ter um numero
  public function __construct($numero){
    $this->numero = $numero;
  }
}
