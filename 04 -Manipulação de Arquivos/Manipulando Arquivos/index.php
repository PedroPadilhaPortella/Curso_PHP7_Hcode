<?php
//gerar um arquivo csv formatado a partir do banco de dados

require_once "config.php";

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuario");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers). "\r\n");

foreach ($usuarios as $row) {

    $data = array();

    foreach ($row as $key => $value) {

        array_push($data, $value);

    }//foreach das colunas

    fwrite($file, implode(",", $data) . "\r\n");

}//foreach das linhas


fclose($file);