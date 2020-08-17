<?php

try {

    throw new Exception("Houve um Erro!", 401);

} catch (Exception $err) {

    echo json_encode(array(
        "message"=>$err->getMessage(),
        "line"=>$err->getLine(),
        "file"=>$err->getFile(),
        "code"=>$err->getCode()
    ));
}

?>