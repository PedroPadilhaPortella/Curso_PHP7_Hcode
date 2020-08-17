<?php

$image = imagecreatefromjpeg("images/certificado.jpg");

$nome = "Pedro Henrique Padilha Portella da Cruz";

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, $nome, $titleColor);
imagestring($image, 3, 440, 370, utf8_decode('Conclusão em ').date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);
imagejpeg($image, "certificado-".date("d-m-Y")."$nome.jpg", 100);

imagedestroy($image);
?>