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
    public function setAno($ano){
        $this->ano = $ano;
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setAno(2001);
$gol->setMotor('1.6');
var_dump($gol);