<?php

$connection = new PDO("sqlsrv:Database=hcode;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$statement = $connection->prepare("SELECT * FROM usuario ORDER BY id");

$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
    foreach ($row as $key => $value) {
       echo "<strong>$key</strong>: $value<br>";
    }
    echo "----------------------<br>";
}

echo json_encode($results);
