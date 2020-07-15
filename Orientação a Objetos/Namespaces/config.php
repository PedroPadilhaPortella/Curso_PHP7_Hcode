<?php

spl_autoload_register(function ($className){
    var_dump($className);
    $dirClass = "class";
    //$filename = "class/Cadastro.php";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $className . ".php";
    //$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"); => em Linux e MAC
    if(file_exists($filename)){
        require_once($filename);
    }

});