<?php

abstract class Animal{
    public function emitirSom(){
        echo  'som de Animal<br>';
    }
    public function mover(){
        echo "Locomover<br>";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo  'latir<br>';
    }
    public function mover(){
        echo "andar<br>";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo  'miar<br>';
    }
    public function mover(){
        echo "caminhar<br>";
    }
}

class Periquito extends Animal{
    public function emitirSom(){
        echo  'piar<br>';
    }
    public function mover(){
        echo "voar e ";
        echo parent::mover();
    }
}

$pluto = new Cachorro();
$pluto->emitirSom();
$pluto->mover();

$garfield = new Gato();
$garfield->emitirSom();
$garfield->mover();

$blu = new Periquito();
$blu->emitirSom();
$blu->mover();