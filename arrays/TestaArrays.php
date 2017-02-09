<?php

//$cursos = $arrays();
//$cursos = array(10,20,30);
$cursos = array("Lógica", "OO", "Desenvolvimento");

echo "$cursos[0]".PHP_EOL;

echo "Quantidade de registros no array ".count($cursos).PHP_EOL;

for($i = 0; $i < count($cursos); $i++){
  echo "Curso: $cursos[$i]".PHP_EOL;
}


echo "\n";
echo "++++++++++foreach+++++++++";
//somente LEITURA DAS INFORMAÇÕES,
//NÃO CONSIGO INICIALIZAR ARRAY
//NÃO TEM VARIAVEL DE ITERAÇÃO
foreach ($cursos as $curso) {
  echo "$curso".PHP_EOL;
}
/*
$cursos = array();

//maneira 1
$cursos[] = "Logica de Programação";

//ou

//maneira 2
array_push($cursos,"HTML, CSS, JS");

*/
//ou

/*
//posso inicializar o arrays na criação
$cursos = array("CURSO003" => "Python", "Ruby");

//maneira 1
$cursos[] = "Logica de Programação";

//ou

//acessa pela Chave
echo "Curso acessado pela chave: $cursos[0]".PHP_EOL;
echo "\n";

//maneira 2
array_push($cursos,"HTML, CSS, JS");

var_dump($cursos);

/*
for($i = 0; $i < count($cursos); $i++){
  echo "Cursos na posição $i: $cursos[$i]".PHP_EOL;
} */


/*
foreach ($cursos as $x => $valor) {
  echo "Chave: $x, $valor".PHP_EOL;
}
*/
