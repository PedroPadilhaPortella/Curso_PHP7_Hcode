<?php
//escaneando o diretorio images, colocando os dados em um array, depois passando esse array num foreach, se o elemento do array não for . e .. entao pegue o nome do arquivo e adicione os dados do path arquivo em uma variavel, adicione o tamanho do arquivo, a data de modificacao e a url em um array, ao final exiba em formato json.
$images = scandir('images');
$data = array();
print_r($images);
foreach ($images as $image) {
    if(!in_array($image, array('.', '..'))){
        $filename = 'images'. DIRECTORY_SEPARATOR . $image;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date('d/m/Y H:i:s', filemtime($filename));
        $info["url"] = "http://localhost/PHP-HCODE/Manipula%C3%A7%C3%A3o%20de%20Arquivos/".$filename;
        array_push($data, $info);
    }
}
echo json_encode($data);