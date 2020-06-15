<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Array vetor</h1>
    <pre>
    <?php

    //array literal padrão e adicionando elemento
    $arr = array(3, 4, 5, 6);
    $arr[] = 7;
    print_r($arr);

    //array literal com index personalizado
    $arrPerson = array(0=>"pedro", 2=>"portella",5=>100, 8=>"0101000001");
    $arrPerson[] = -11;
    print_r($arrPerson);
    
    //desalocando, removendo elemento
    unset($arrPerson[8]);
    
    print_r($arrPerson);
    ?>
    </pre>

</body>
</html>