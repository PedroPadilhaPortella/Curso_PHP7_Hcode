<?php
//Arrays PHP

$frutas = array("laranja", "abacaxi", "melancia", "banana");
print_r($frutas);
$pessoas = array();


echo "<br><br>";


array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>20
));
array_push($pessoas, array(
	'nome'=>'Pedro',
	'idade'=>19
));
print_r($pessoas);
echo "<br><br>Arrays em formato JSON<br><br>";
echo json_encode($pessoas);
echo "<br><br>Arquivo JSON convertido<br><br>";
$json = '[{"nome":"Joao","idade":20},{"nome":"Pedro","idade":19}]';
$data = json_decode($json, true);
var_dump($data);
?>