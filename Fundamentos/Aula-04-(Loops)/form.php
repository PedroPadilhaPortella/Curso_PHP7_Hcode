<form>
	<input type="text" name="Nome" placeholder="nome">
	<input type="date" name="Nascimento" placeholder="nascimento">
	<input type="submit" value="enviar">
</form>

<?php
if(isset($_GET)){
	foreach ($_GET as $key => $value) {
	echo "Nome do Campo: $key<br>";
	echo "Value do Campo: $value<br>";
	}
}


?>