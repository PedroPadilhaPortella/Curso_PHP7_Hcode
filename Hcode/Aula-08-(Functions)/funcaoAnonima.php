<?php
//uso de função anonima em php, onde ela pode ser passada como parametro ou atribuida a uma variavel

$fun = function ($a) {

	var_dump($a);

};

$fun('olá');