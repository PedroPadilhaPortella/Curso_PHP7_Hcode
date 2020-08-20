<?php

header("Content-Type: image/jpeg");

$file = "images/wallpaper.jpg";

$new_height = 256;
$new_width = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_height, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

//imagecopyresampled ( imagem destino, imagem origem, recorte destino x, recorte destino y, recorte origem x, recorte origem y, largura destino, altura destino, largura origem, altura origem);

