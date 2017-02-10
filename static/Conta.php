<?php

class Conta{
  public $numero;  //atributo do objeto
  public $saldo;   //atributo do objeto
  public static $contadorConta; //static vai fazer o contador ser um contador da classe e não de cada objeto

  //construtor criado para contar a quantidade de contas criadas
  public function __construct(){
    self::$contadorConta++; //utiliza "self::" para acessar atributo static em vez do "this->$contadorConta++""
  }

  public static function zeraContador(){  //se metodo tiver o "static", ele será da classe
    //envia e-mail
    //o this-> só pode ser usado dentro de metodos do objeto, ou seja, não pode ser usado dentro de metodos que tem
    //a palavra "static"

    echo "zeraContador sendo chamado".PHP_EOL;
    self::$contadorConta = 0;
  }
}
