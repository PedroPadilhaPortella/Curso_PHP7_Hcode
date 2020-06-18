<?php
require_once "call01.php";
include_once "call02.php";
$resultado = soma(10, 20);

echo "resultado Soma de 10 + 20= " . $resultado;
echo "<br>Usando Require e Include<br><br>";

$id = idle();
echo "ID : " . $id;
