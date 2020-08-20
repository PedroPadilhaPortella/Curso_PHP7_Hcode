<?php

$image = imagecreatefromjpeg("images/certificado.jpg");

$nome = "Pedro Henrique Padilha Portella da Cruz";

$black = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font1 = realpath("fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf");
$font2 = realpath("fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf");


imagettftext($image, 32, 0, 150, 200, $black, $font1, "Certificado do Curso de PHP 7");
imagettftext($image, 32, 0, 150, 380, $black, $font2, $nome);
imagestring($image, 5, 400, 410, utf8_decode('Conclusão em ').date("d/m/Y"), $black);

header("Content-Type: image/jpeg");

imagejpeg($image);
imagejpeg($image, "images/certificado-".date("d-m-Y").".jpg");

imagedestroy($image);

//imagettftext (arquivo, tamanho da fonte, angulo do texto, eixo x, eixo y, cor do texto, path da fonte, texto)

?>