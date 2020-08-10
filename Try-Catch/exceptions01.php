<?php

//podemos manipular os erros para eles serem mostrados ao usuario da forma que desejarmos, desde um formato json até em uma string ou texto fomatado.
function manipular_erro($code, $message, $file, $line){
    echo json_encode([
        "codigo"=>$code,
        "mensagem"=>$message,
        "arquivo"=>$file,
        "linha"=>$line
    ]);
    echo "<br><br>ERRO $code: $message!<br>Arquivo: $file, Linha $line<br>";
};

set_error_handler("manipular_erro");
echo "Resultado:" . 100/0;