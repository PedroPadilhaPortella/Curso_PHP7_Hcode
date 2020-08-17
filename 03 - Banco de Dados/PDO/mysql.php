<?php

$connection = new PDO("mysql:dbname=hcode;host=localhost", "root", "");

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
