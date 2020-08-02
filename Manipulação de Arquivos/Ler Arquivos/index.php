<?php
/*como converter e abrir arquivos, como imagens que retornam arquivos binários, pegando o nome dele, seu mimetype (.png e etc) e o binário convertido para base 64.*/


$filename = "php7.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:$mimetype;base64,$base64";

?>

<a href="<?=$base64encode ?>" target="_blank">Link para Imagem</a>
<img src="<?=$base64encode ?>" width="500" height="500">