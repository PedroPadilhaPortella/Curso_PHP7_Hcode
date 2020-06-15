<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Array as Ranges</h1>
    <pre>
    <table border="1"><tr>
    <?php
    //RANGE: primeiro valor, ultimo valor, passo
    $range = range(0, 100, 10);
    $range[] = -1;
    foreach($range as $valor){
        echo "<td>$valor";
    }
    ?>
    </table>
    
    </pre>

</body>
</html>