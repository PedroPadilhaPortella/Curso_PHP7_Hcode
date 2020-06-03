<?php
//Alguns elementos php importantes

//arrays em php
$frutas = array("mamao", "laranja", "pera", "banana", "maçã", "abacate");
print_r($frutas);
echo "<br> $frutas[0] é o primeiro elemento";
echo "<br> $frutas[3] é o quarto elemento<br><br>";

//local e id do servidor usamdo $_SERVER
$local = $_SERVER["SCRIPT_NAME"];
echo "Local do Servidor: $local<br>";
$ip = $_SERVER["REMOTE_ADDR"];
echo "Id do Servidor:  $ip <br>";

//chamada de função em php
function setMessage(){
	global $message;
	$message = "Function: Hello World";
}
setMessage();
echo $message;
