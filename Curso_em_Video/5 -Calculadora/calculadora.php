<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<h2>Calculadora em PHP</h2>
<?php

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];

$operacao = $_GET["operacao"];

function calcular($a, $b, $operacao){
    $result = 0;
    switch($operacao){
        case '+':
            $result = $a + $b;
        break;
        case '-':
            $result = $a - $b;
        break;
        case '/':
            if($b != 0){
                $result = $a / $b;
            }else{
                echo "**Erro : DIVISÃO IMPOSÍVEL!!**";
                return;
            }
        break;
        case '*':
            $result = $a * $b;
        break;
        default:
            echo "<h4>**ERRO : OPERAÇÃO INVÁLIDA**</h4>";
            return;
    }
    echo "<h3>O resultado da operação foi: $result</h3>";
}

calcular($valor1, $valor2, $operacao);

?>
</body>
</html>