<?php
//datetime()

$dt = new DateTime();//instancia de DateTime

$periodo = new DateInterval("P15D"); //periodo 15 dias

echo "Datetime Atual: ", $dt->format("d/m/Y H:i:s");//mostra o dateTime atual
echo '<br>';

$dt->add($periodo);//adiciona periodo

echo "Datetime + 15 dias: ", $dt->format("d/m/Y H:i:s");//mostra o datetime mais o periodo


?>