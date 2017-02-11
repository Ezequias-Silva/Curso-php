<?php
//o instuito da herança é a reutilização de código
class Funcionario{
    public $nome;
    public $salario;
    //public $senha; //gerente
    //public $ramal; //secretario
    const PORCENTAGEM_DO_BONUS = 0.05;


    public function calculaBonus(){
      return $this->salario * self::PORCENTAGEM_DO_BONUS + 1000;   //return $this->$salario * 0.4;
    }
}
