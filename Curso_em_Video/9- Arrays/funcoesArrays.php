<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    $arr = [2, 4, 16, 1, 10, 6, 14];

//conta quantos elementos tem no array
    echo "O vetor tem ".count($arr)." elementos<br>";

//adiciona valor na ultima chave
    array_push($arr, "pedro");

//remove valor da ultima chave
    array_pop($arr);

//adicona valor na primeira chave e empurra os outros
    array_unshift($arr, 00);

//elimina o primeiro elemento
    array_shift($arr);

//ordena os elementos
    sort($arr);

//inverte os elementos
    rsort($arr);

    
//ordena os valores junto com o indice
    asort($arr);

//inverte os valores junto com o indice
    arsort($arr);

//ordena os indices
    ksort($arr);

//inverte os indices do array
    krsort($arr);

    print_r($arr);
    ?>
    </pre>
</body>
</html>