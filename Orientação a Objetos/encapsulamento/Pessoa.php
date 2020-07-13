<?php

class Pessoa{
    public $nome = 'Rasmus Lerdof';
    protected $idade = 76;
    private $senha = 'admin1234';

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>"; 
        echo $this->senha;
    }
}

class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this)."<br>";
        echo $this->nome."<br>";
        echo $this->idade."<br>"; 
        echo $this->senha; //método privado
    }
}

$rasmus = new Programador();
$rasmus->verDados();