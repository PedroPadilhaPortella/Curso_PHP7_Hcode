<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
</head>
<body>
    <?php
    $numero = $_GET["valor"];
    $j = 0;
    for($i = 1; $i <=  $numero; $i++){
        if($numero % $i == 0){
            $divisores[$j] = $i;
            $j ++;
        }
    }
    echo "<h3>Os divisores de $numero são:<h3>";
    print_r($divisores);
    echo "<p>$numero possui ", sizeof($divisores), " divisores<p>";
    if (sizeof($divisores) == 2){
        echo "<h2>Esse numero é Primo!</h2>";
    }else{
        echo "<h2>Esse numero não é Primo!</h2>";
    }
    ?>
</body>
</html>