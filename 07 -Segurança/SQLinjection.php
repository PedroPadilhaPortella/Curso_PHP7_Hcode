<?php

$id = (isset($_GET['id']))? $_GET['id'] : 1;

//metodos de tratar sql Injection, use especificações do que o sql vai receber, e use PDO
if(!is_numeric($id) || strlen($id) > 3) {
    exit("Pegamos Você!");
}

$connection = mysqli_connect("localhost", "root", "", "exemplo");

$sql = "SELECT * FROM amigos WHERE id = $id";

$exec = mysqli_query($connection, $sql);

while($resultado = mysqli_fetch_object($exec)) {
    var_dump($resultado);
}


/*injeção de sql usando a url*/
//http://localhost/Curso_PHP7_Hcode/07%20-Seguran%C3%A7a/SQLinjection.php?id=2%20or%201=1%20--
?>


