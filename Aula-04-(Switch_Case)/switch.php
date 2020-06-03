<?php

$diasemana = date("w");

switch($diasemana){
	case 0:
	echo "domingo";
	break;

	case 1:
	echo "segunda";
	break;

	case 2:
	echo "terca";
	break;

	case 3:
	echo "quarta";
	break;

	case 4:
	echo "quinta";
	break;

	case 5:
	echo "sexta";
	break;

	case 6:
	echo "sabado";
	break;

	default:
	echo "dia desconhecido";
}