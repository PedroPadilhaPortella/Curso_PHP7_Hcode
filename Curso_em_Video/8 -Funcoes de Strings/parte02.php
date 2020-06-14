<?php
$texto = "the quick brown fox jumps over the lazy dog";

//string to lower and string to upper
echo strtolower($texto)."<br>".strtoupper($texto)."<br>";

//upper case first
echo ucfirst($texto)."<br>";

//uppper case words
echo ucwords($texto)."<br>";

//string reverse
echo strrev($texto)."<br>";

//retorna a posição de determinada string, strpos e stripos
echo "Fox position: ".strpos($texto, "fox").", Dog position: ".stripos($texto, "Dog");

//conta quantas vezes determinada substring aparecere numa string
echo "<br>'the' encontrado ".substr_count($texto, "the")." vezes<br>";

//retorna uma substring a partir do index dela
$lazyDog = substr($texto, 35);
$quickFox = substr($texto, 0, 19);
echo "$lazyDog and $quickFox<br>";

//string pad, adiciona espacos especificos a uma string, pode ser STR_PAD_RIGHT, STR_PAD_LEFT ou STR_PAD_CENTER
$nome = 'Pedro';
$newNome = str_pad($nome, 30, "_", STR_PAD_LEFT);
echo "Meu nome é $newNome<br>";

//replace de strings
$newTexto = str_ireplace("Fox", "wolf", $texto);
echo "$newTexto<br><br>";


//string repeat, repete strings, usei wordwrap para quebrar a string
$dio = wordwrap(str_repeat("DigitalInnovationOne", 10), 20, "</br>", true);
echo $dio;





?>