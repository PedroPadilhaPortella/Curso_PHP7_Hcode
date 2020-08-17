<?php
/*
Agora utilizando o método spl_autoload_register(), a forma mais correta segundo o php 5 e 7.
ele busca a strign do nome do diretorio até encontar a classe;
*/

function my_autoload ($pClassName) {
    require_once(__DIR__ . "/classes/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");


$pedro = new Pessoa();
$pedro->falar("pedro portella");

$cachorro = new Animal();
$cachorro->emitirSom();