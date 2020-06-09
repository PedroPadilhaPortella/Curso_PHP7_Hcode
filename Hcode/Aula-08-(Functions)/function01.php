<?php
//function em php
function soma ($a = 0, $b = 0) {
	return $a + $b;
}
echo soma(-5, 3);
echo "<br><br>";


function args() {
	$argumentos = func_get_args();
	var_dump($argumentos);
}
args(True, 10, -10, "nametag", [1, 2, 3, 4, 5]);
echo "<br><br>";

//escopo de função em php, onde é diferente a variavel dentro e fora da funcao
$a = 10;
function parametroPorValor($a) {
	$a = 50;
	return $a;
}
echo parametroPorValor($a);
echo "<br>";
echo $a."<br>";

//passagem de parametro por referencia usa-se & na variavel, os valores não são alterados
$b = 10;
function parametroPorReferencia(&$b) {
	$b = 50;
	return $b;
}
echo parametroPorReferencia($b);
echo "<br>";
echo $b;
