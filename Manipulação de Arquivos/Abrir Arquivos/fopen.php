<?php

//a funcao fopen pede dois parametros, o diretorio e a ação
$file = fopen('log.txt', 'a');
fwrite($file, "load: ".date('Y-m-d H:i:s'). "\r\n");
fclose($file);
echo "arquivo criado";