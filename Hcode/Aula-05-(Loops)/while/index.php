<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TABUADA</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
 <h3>TABUADA </h3>
   
   <p>** Escolha um número para fazer a TABUADA ** </p>
   
  <form method="get" action="tabuada.php">
  
  <label for="itam"> Número: </label>
 
  <select name='num' id='itam'>
  
  <?php
   
   $cont = 1;
   
   while($cont <= 10) {
   
   echo "<option value='$cont' > $cont </option> <br/>";
   
    $cont++;
   }
   
   
  ?>
  
  </select>
  
 <br/><br/>
 
 <button class="button" style="vertical-align:middle" > <span>Gerar</span></button>
    
       </form>
 
</div>
</body>
</html>