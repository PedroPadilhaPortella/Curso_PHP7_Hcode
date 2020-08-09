<?php

if(isset($_COOKIE["COOKIE_HUM_GOSTOSO"])) {
    $data = json_decode($_COOKIE["COOKIE_HUM_GOSTOSO"]);
    echo $data->nome.'<br>'.$data->idade.'<br>'.$data->sexo;
}

?>