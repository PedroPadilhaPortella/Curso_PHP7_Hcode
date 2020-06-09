<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
 echo "<h3>TABUADA</h3>";
    ##estrutura de repetição com do.. while
 ### Com teste de condição no final da estrutura
 
 ##### gerando uma tabuada com o numero escolhido
 
  $numero = isset($_GET["num"]) ? $_GET["num"] : 1;
  
 echo "</br><b>*** Tabuada de $numero *</br></b> </br>";
  
  $cont = 1;
  $multi = 1;
  
  do {
   
   $multi = $numero * $cont;
   
   echo "$numero X $cont = <b>" . $multi . "</b></br>";
   
   $cont++;
  
  }while ($cont <= 10); 
  
  
    ?>
 
 <br/>

</div>
</body>
</html>