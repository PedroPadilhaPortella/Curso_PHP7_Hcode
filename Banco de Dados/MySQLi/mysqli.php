<?php

$connection = new mysqli("localhost", "root", "", "hcode"); /*coneção do banco de dados*/
if($connection->connect_error){
    echo "Erro: {$connection->connect_error}";
    exit;
}

$stmt = $connection->prepare("INSERT INTO usuario (user) VALUES (?)");
$stmt->bind_param("s", $user);
$user = "Samuel Moraes";
$stmt->execute();
$user = "Rudrigo";
$stmt->execute();