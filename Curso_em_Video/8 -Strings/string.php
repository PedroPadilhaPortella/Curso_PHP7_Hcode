<?php
/*
Função printf() : Permite exibir uma string com itens formatados.

Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.

Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.

Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

Função trim() : Elimina espaços em branco antes e depois de uma string.

Função ltrim() : Elimina espaços no início de uma string.

Função rtrim() : Elimina espaços em branco no final de uma string.

Função str_word_count() : Conta quantas palavras uma string possui.

Função explode() : Quebra uma string e coloca os itens em um vetor.

Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

Função implode() : Transforma um vetor inteiro em uma string.

Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

Função ord() : Retorna o código ASCII de um caractere passado como parâmetro
*/

$prod2 = "pao";
$preco2 = 0.5;
echo "Echo: O $prod2 custa R$ ". number_format($preco2, 2).' reais';


$prod = "Manteiga";
$preco = 3.99;
printf("<br>Printf: <strong>O %s está custando %.2f reais</strong><br>Print_r:  ", $prod, $preco);
/*
%d valor decimal
%u valor decimal apenas positivo
%f valor real
%s string
%i inteiro
*/


$frutas = array('banana', 'maca', 'pera', 'tomate');
print_r($frutas);
echo "<br>Var_Dump:  ";
var_dump($frutas);
echo "<br>Var_Export:  ";
var_export($frutas);


$texto = "<br>||Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quae nisi quos exercitatione||<br>";
$tag = wordwrap($texto, 15, "</br>", false/*or true*/);
echo $tag;
echo "<br><br>Strlen: ".strlen($texto);


$nome = "         Pedro Portella da Cruz     ";
echo "<br><br>strlen: ".strlen($nome);
echo "<br>trim:  ".strlen(trim($nome));


$frase = "eu estudo php, javascript e csharp.";
echo "<br>str Word Count - 0:  ".str_word_count($frase, 0),"<br>str Word Count - 1: ";
print_r(str_word_count($frase, 1));
echo "<br>str Word Count - 2: ";
print_r(str_word_count($frase, 2));
echo "<br>Explode: ";

$vetor = explode(" ",$frase);
print_r($vetor);
echo "<br>";
echo "Implode: ".implode(" ", $vetor)."<br><br>"; //tambem pode ser join()


$name = 'Pedro_Portella';
print_r(str_split($name));

echo "<br>";
$letra = chr(99);
echo $letra;

echo "<br>";
$letra = ord('c');
echo $letra;
?>