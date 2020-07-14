<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function passarMarcha($marcha);
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veiculo acelerou $velocidade km/h<br>";
    }
    public function frear($velocidade){
        echo "O veiculo freou $velocidade km/h<br>";
    }
    public function passarMarcha($marcha){
        echo "Passou para a $marcha marcha<br>";
    }
}

$carro = new Civic();
$carro->acelerar(60);
$carro->passarMarcha(2);
$carro->frear(40);