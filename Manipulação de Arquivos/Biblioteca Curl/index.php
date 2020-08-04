<?php
//Uso da biblioteca curl do php
$cep = "04809220";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

//O curl setopt recebe a variavel, a opção sobre o que fazer com essa variavel, se deve dar retorno ou não, e um valor
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//verificação de ssl, sim ou não
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//execução
$response = curl_exec($ch);

//fechar execução
curl_close($ch);

//decodificando o json
$data = json_decode($response, true);

print_r($data["bairro"]);