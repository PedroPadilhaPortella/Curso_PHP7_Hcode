<?php

$dir01 = "pasta01";
$dir02 = "pasta02";
$file01 = "readme.txt";

if(!is_dir($dir01)) mkdir($dir01);
if(!is_dir($dir02)) mkdir($dir02);

if(!file_exists($dir01 . DIRECTORY_SEPARATOR . $file01)) {

    $file = fopen($dir01 . DIRECTORY_SEPARATOR . $file01, "w+");

    fwrite($file, date("Y/m/d H:i:s"));

    fclose($file);
}


//A função rename altera o nome ou o diretório de arquivos
rename(
    $dir01 . DIRECTORY_SEPARATOR . $file01, //Origem
    $dir02 . DIRECTORY_SEPARATOR . $file01 //Destino
);

echo "Arquivo movido para $dir02" . DIRECTORY_SEPARATOR . "$file01 com sucesso!";