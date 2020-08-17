<?php
/*Declaração de uma classe*/

class Pessoa {
//atributos e métodos
    public $nome;

    public function falar(){
        return "Meu nome é {$this->nome}";
    }
}

$claudio = new Pessoa();
$claudio->nome = "Pedro Portella";
echo $claudio->falar();