<?php

class Carro {
/*atributos privados*/
    private $motor;
    private $modelo;
    private $ano;

    function exibir(){
        return array(
            "motor"=>$this->getMotor(),
            "modelo"=>$this->getModelo(),
            "ano"=>$this->getAno()
        );
    }

/*metodos acessores e modificadores*/
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno(){
        $this->ano = $ano;
    }
}