<?php

class Documento{
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    public function validarCPF($numero): bool{
        if(strlen($numero) == 11){
            echo $numero;
            return true;
        }else{
            echo false;
            return false;
        }
    }
}


$pedro = new CPF();
$pedro->validarCPF(40575206808);