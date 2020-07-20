<?php

$connect = new PDO("mysql:host=localhost;dbname=hcode", "root", "");
$statement = $connect->prepare("INSERT INTO usuario(user, senha) VALUES (:USER, :SENHA)");
$login = "Rogerio";
$senha = "aws123";

$statement->bindParam(":USER", $login);
$statement->bindParam(":SENHA", $senha);

$statement->execute();

echo "Dados inseridos!";