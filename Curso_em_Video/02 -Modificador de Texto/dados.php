<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <?php
        $texto = isset($_GET["t"])? $_GET["t"] : "texto genérico";
        $tamanho = isset($_GET["tam"])? $_GET["tam"] : "12px";
        $cor = isset($_GET["cor"])? $_GET["cor"] : "#000000";
    ?>

    <style>
        span.texto {
            font-size: <?php echo $tamanho; ?>; 
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>
    <h1 style="text-align: center;">Modificador de Texto</h1>
    <div>
        <?php
        echo "<span class='texto'> $texto </span> <br>";
        ?>
        <a href="html.html">|Voltar|</a>
    </div>
    
</body>
</html>