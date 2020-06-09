<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: indigo; color: whitesmoke; text-align: center; font-size: 20px;">
<h1>Curso PHP Iniciante - Curso em Vídeo</h1>
<h2>Funções Aritméticas e Operadores Matemáticos em PHP</h2>
<?php
//declaração de variáveis
$n1 = 8;
$n2 = 4;
$n3 = -5.876738;
$n4 = 457.9965535585854584780;
//adição
$res = $n1 + $n2;
echo "A soma de $n1 e $n2 é $res<br>";
//subtração
$res = $n1 - $n2;
echo "A subtração de $n1 por $n2 é $res<br>";
//divisão
$res = $n1 / $n2;
echo "A divisão entre $n1 e $n2 é $res<br>";
//produto
$res = $n1 * $n2;
echo "O produto de $n1 e $n2 é $res<br>";
//metodo que retorna o valor absoluto
echo "O valor absoluto de $n3 é ".abs($n3);
//metodo que retorna a potencia
echo  "<br> $n1<sup>$n2</sup> é ".pow($n1, $n2);
//metodo que retorna a raiz quadrada
echo "<br> A raiz quadrada de $n1 é ".sqrt($n1);
//metodo que retorna o valor arredondado e o valor em inteiro
echo "<br>$n3 arredondado é ".round($n3). ", mas seu valor inteiro é ".intval($n3);
//metodo que retorna a formatação de casa decimais
echo "<br> O valor formatado em 4 casas de $n4 é ".number_format($n4, 4)."<br><br";
?>
<h2></h2>
</body>
</html>