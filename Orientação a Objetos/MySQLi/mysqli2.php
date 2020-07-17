<?php

$connection = new mysqli("localhost", "root", "", "hcode"); /*coneção do banco de dados*/
if($connection->connect_error){
    echo "Erro: {$connection->connect_error}";
    exit;
}

$result = $connection->query("SELECT * FROM usuario ORDER BY id");
$data = array();
while($row = $result->fetch_assoc()/*ou fetch_array(MYSQLI_ASSOC)*/){
    array_push($data, $row);
}

echo json_encode($data);