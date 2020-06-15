<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Matrizes e Arrays Aninhados</h1>
    <pre>
    <?php
    $matriz = array( 
        array(3, 2),
        array(6, 7),
        array(0, -1)
    );
    $matriz [2] [3] = 100;
    $matriz [0] [0] = -100;
    print_r($matriz);
    ?>
    </pre>
</body>
</html>