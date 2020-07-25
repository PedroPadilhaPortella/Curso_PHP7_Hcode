<?php

require_once "config.php";

$sql = new Conexao();
$usuarios = $sql->select("SELECT * FROM gafanhotos");
echo json_encode($usuarios);
?>