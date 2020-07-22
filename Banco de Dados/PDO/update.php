<?php

$connect = new PDO("mysql:host=localhost;dbname=hcode", "root", "");
$statement = $connect->prepare("UPDATE usuario SET user = :USER, senha = :SENHA WHERE user = :USER");
$user = "Pedro";
$senha = "queryPK007";
//$id = '1';

$statement->bindParam(":USER", $user);
$statement->bindParam(":SENHA", $senha);

//$statement->bindParam(":ID", $id);

$statement->execute();

echo "Dados Alterados!";