<?php

//declaração de tipos escalares e declaracao do tipo de retorno
function soma (float ...$valores) : string {
	return array_sum($valores);
}

echo soma(2, 10);
echo "<br>";
var_dump(soma (12.12, 4.25, 54, 54, 112, 100000)) ;


