<?php

function tratarNome($name) {
    if(!$name){
        throw new Exception("<p>Nenhum nome foi informado<p>", 401);
    }

    echo ucfirst($name);
}

try {
    
    tratarNome("João");
    tratarNome("");

} catch (Exception $err ) {
    
    echo $err->getMessage();

}finally{

    echo "Bloco Try executado!";
}

?>