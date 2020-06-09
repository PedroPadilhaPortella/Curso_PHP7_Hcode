<?php

$diasemana = date("w");

echo "<h2> Hoje é...<h2>";
switch($diasemana){
	case 0:
	echo "domingo";
	break;

	case 1:
	echo "segunda feira";
	break;

	case 2:
	echo "terca feira";
	break;

	case 3:
	echo "quarta feira";
	break;

	case 4:
	echo "quinta feira";
	break;

	case 5:
	echo "sexta feira";
	break;

	case 6:
	echo "sabado feira";
	break;

	default:
	echo "dia desconhecido";
}