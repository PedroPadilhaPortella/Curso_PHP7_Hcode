<!-- Esse tipo de ataque consiste em inserir comando html ou javascript em inputs de site para tentar causar algum estrago. -->
<!-- Para evitar isso, existem métodos como o strip_tags, que remove qualquer tag html ou php de strings, ou usando o htmlentities para converter tudo para texto -->

<form method="post">

<input type="text" name="busca">
<button type="submit">Send</button>

</form>

<?php
if(isset($_POST['busca'])) {

    echo strip_tags($_POST['busca'], "<strong><a>");
    echo htmlentities($_POST['busca']);
}

?>