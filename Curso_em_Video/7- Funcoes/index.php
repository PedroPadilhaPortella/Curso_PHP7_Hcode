<?php

$arr = [5, 4, 2 -12, 90, -200, 1000];

//pega indeterminados parametros usando esse rest operator e args em PHP
function soma (...$p){
    $num = func_num_args();
    $s = 0;
    for($i = 0; $i < $num; $i++){
        $s += $p[$i]; 
    }
    return $s;
}

print_r($arr);
echo "<br><br>A soma entre diversos valores é igual a ", soma (5, 4, 2 -12, 90, -200, 1000);

?>