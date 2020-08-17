<?php

namespace Cliente;
class Cadastro extends \Cadastro{
    public function registrarVenda(){
        echo "<p>Venda registrada para o cliente {$this->getNome()}</p>";
    }
}