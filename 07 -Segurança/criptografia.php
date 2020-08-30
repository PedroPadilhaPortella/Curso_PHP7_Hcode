<?php
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [ "nome"=>"pedro" ];


$encrypt = openssl_encrypt (
    json_encode($data), //dados
    'AES-128-CBC', //metodo
    SECRET, //chave
    0, //opções
    SECRET_IV //IV
);

echo $encrypt . "<br>";

$string = openssl_decrypt($encrypt, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump($string);