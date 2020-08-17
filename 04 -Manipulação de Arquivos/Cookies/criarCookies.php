<?php

$data = array(
    "nome"=>"pedro portella",
    "idade"=> 19,
    "sexo"=>"masculino"
);

setcookie("COOKIE_HUM_GOSTOSO", json_encode($data), time() + 3600);

echo "Cookie criado!";


?>