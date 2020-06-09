<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares e Impares</title>
</head>
<body>
    <?php
    
    $num = 0;
    echo "PARES E IMPARES<br>";
    do{
        $num += 1;
        if ($num % 2 == 0){
            echo "-------  $num<br>";
        }
        else{
            echo "$num";
        }

        
    }while($num < 50);
    
    ?>
</body>
</html>