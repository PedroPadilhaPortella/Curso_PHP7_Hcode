<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<h1>Operadores de Atribuição e Incremento e Decremento - Exemplos</h1>
    <?php
    //exemplo de operador de atribuição de soma
    $preco = $_GET["p"];
    echo "<p>O preço do produto é R$ ".number_format($preco, 2);
    $preco -= ($preco* 0.1);
    echo "<br> O preço com 10% de deconto será de R$ ".number_format($preco, 2);
    //exemplo de operador de incremento
    $anoatual = 2020;
    $year = $anoatual;
    $anoanterior = --$year;
    echo "<p>O ano anterior a $anoatual foi $anoanterior";
    //Uso de Variáveis Referenciadas
    $a = 3;
    $n = $a;
    $b = &$a;
    $b += 5; 
    echo "<p>A vale $a e B vale $b, seu valores se tornaram iguais porque A foi passado por referencia,";
    echo " mas seu valor original era $n.";
    //Variavel de Variáveis
    $nome = "Pedro";
    $$nome = "Pedro Henrique Padilha Portella da Cruz";
    echo "<p>String contida em Nome: $nome/ $Pedro";
    
    
    ?>
</body>
</html>