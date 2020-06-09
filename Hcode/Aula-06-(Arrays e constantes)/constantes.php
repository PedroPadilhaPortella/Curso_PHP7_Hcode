<?php

//definindo uma constante
define("SERVIDOR", "127.11.196");
echo SERVIDOR . "<br><br>";

//definindo um array constante 
define("BANCO_DE_DADOS", ['127.00.196', 'root', 'admin', 'postgreSQL']);
print_r(BANCO_DE_DADOS);

//funcao PHP_VERSION é uma constante!!
echo "<br><br>PHP Version: " . PHP_VERSION;
//a barra de diretorio é uma constante!!
echo "<br><br>Directory Separator:  " . DIRECTORY_SEPARATOR;
?>