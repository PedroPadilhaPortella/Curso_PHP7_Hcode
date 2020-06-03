<?php


$total = 1000;
$res = $total;
$desconto = 0.9;
do{
	$total = $total * $desconto;
}while($total > 100);
echo "Descontos acumulados de 10% de $res é $total";





$condicao = True;
while (true){
	$numero = rand(1, 10);
	echo $numero. "<br>";
	if($numero == 5) break;
}


?>