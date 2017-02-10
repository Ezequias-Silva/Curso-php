<?php

$vetor = array(2 , 3 , 4 , 5);
//vai resultar em [3*4*5, 2*4*5, 2*3*5, 2*3*4]

print_r($vetor);

$multiplica = 1;

foreach ($vetor as $numero) {
  $multiplica *= $numero;
}

$produto = array();
for ($i=0; $i < count($vetor); $i++) {
  $produto[$i] = $multiplica/$vetor[$i];
}

print_r($produto);
