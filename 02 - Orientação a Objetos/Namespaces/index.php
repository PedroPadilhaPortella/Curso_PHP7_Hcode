<?php

require_once "config.php";

use Cliente\Cadastro;

$cadastro = new Cadastro;
$cadastro->setNome("pedro");
$cadastro->setEmail("pedro.kadjin.sg@gmail.com");
$cadastro->setSenha("admin");
$cadastro->registrarVenda();

echo $cadastro; //funciona pois a class Cadatro tem um método que converte a classe em JSON