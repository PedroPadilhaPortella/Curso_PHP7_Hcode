<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>php-dados</title>
</head>
<body>
    <h1 style="text-align: center;">Formulario de dados</h1>
    <div>
        <?php
        $nome = isset($_GET["nome"])? $_GET["nome"] : "[nome não informado]";
        if(isset($_GET["ano"])){
            $ano = $_GET["ano"];
            $idade = date("Y") - $ano;
        }else{
            $idade = "[ano não informado]";
        }
        $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sexo não informado]";

        echo "$nome é $sexo e tem $idade<br>";
        
        ?>
        <a href="html.html">Voltar</a>
    </div>
    
</body>
</html>