<?php
/*
Carregando arquivos usando função autoload, embora essa função já esteja desatualizada para o php7.
Nela, vc usa uma string para concatecnar o nome da classe para buscar em arquivos do diretório sem buscar 
o nome dela em especifico.
*/

function __autoload($nomeDaClasse){
    //include_once("./".$nomeDaClasse.".php");
    $filename = "./".$nomeDaClasse.".php";
    include_once($filename);
}

$pedro = new Pessoa();
$pedro->falar("pedro portella");

$cachorro = new Animal();
$cachorro->emitirSom();