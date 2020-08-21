<?php

require ("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get("/", function() {
    echo "pedro.kadjin.com.br";
});

$app->get("/:nome", function($nome) {
    echo "Hello".$nome;
});

$app->run();

?>