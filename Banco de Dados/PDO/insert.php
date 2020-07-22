<?php

$connect = new PDO("mysql:host=localhost;dbname=hcode", "root", "");
$statement = $connect->prepare("INSERT INTO usuario(user, senha) VALUES (:USER, :SENHA)");
$user = "Carlos";
$senha = "carlinhosDJ010101010";

$statement->bindParam(":USER", $user);
$statement->bindParam(":SENHA", $senha);

$statement->execute();

echo "Dados inseridos!";