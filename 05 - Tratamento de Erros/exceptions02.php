<?php

//podemos configurar os tipos de erros que queremos que apareçam no codigo, como fatal errors, exceptions, warnings e notices.
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET['nome'];
echo $nome;


?>