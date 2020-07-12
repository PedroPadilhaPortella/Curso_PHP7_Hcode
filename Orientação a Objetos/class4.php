<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;


/*Método Construtor*/
    public function __construct($street, $number, $city){
        $this->logradouro = $street;
        $this->numero = $number;
        $this->cidade = $city;
    }

    //método executado após o fim do programa ou quando é chamado
    public function __destruct(){
        echo "<br><br>Execução Finalizada...";
    }

    public function __toString(){
        return "<br><br>{$this->logradouro}, numero {$this->numero} - {$this->cidade}";
    }
}

$loc01 = new Endereco ("Rua antonio le voci", 126, 'São Paulo - SP');
print_r($loc01);
echo $loc01;
unset($loc01);


/*
Os nomes de função __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone() e __debugInfo() são mágicos nas classes do PHP. Não deve-se ter funções com esses nomes em nenhuma de suas classes a não ser que queira a funcionalidade mágica associada a eles.
*/