<?php

$connect = new PDO("mysql:host=localhost;dbname=hcode", "root", "");
$connect->beginTransaction();
$statement = $connect->prepare("DELETE FROM usuario WHERE user = ?");
$user = "Rogerio";

$statement->execute(array($user));

//$connect->rollback();
$connect->commit();

echo "Dados Apagados!";