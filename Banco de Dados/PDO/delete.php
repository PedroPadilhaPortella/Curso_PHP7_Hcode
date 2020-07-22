<?php

$connect = new PDO("mysql:host=localhost;dbname=hcode", "root", "");
$statement = $connect->prepare("DELETE FROM usuario WHERE user = :USER");
$user = "Carlos";

$statement->bindParam(":USER", $user);

$statement->execute();

echo "Dados Apagados!";