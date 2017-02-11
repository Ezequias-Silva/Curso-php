<?php
require_once 'Funcionario.php';

class Gerente extends Funcionario{
  //public $nome;
  //public $salario;
  public $senha;


  public function calculaBonus(){  //filha cria metodo como mesmo nome da classe pai (sobrescrita/overrride). Isso acontece quando eu não estiver feliz com o metodo da claase pai (Funcionario)
    return parent::calculaBonus() + 2 * $this->salario;  //return $this->salario * 0.4 + 2 * $this->salario;;
    //parent chama metodo da classe pai
  }
}
