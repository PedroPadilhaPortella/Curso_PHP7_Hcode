<?php
//se esse diretorio não existir, crie-o, se existir, apague-o
$name = 'pasta';

if(!is_dir($name)){
    mkdir($name);
    echo "Diretorio $name criado com sucesso";
}else{
    rmdir($name);
    echo "Diretorio $name já existe e foi removido!";
}