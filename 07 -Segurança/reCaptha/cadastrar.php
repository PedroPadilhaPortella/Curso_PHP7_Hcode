<?php

$email = $_POST['inputEmail'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6Lf_2sIZAAAAAJUodrTqxIlx7-wXYrAbF4vwNKPf",
    "response"=>$_POST['g-recaptcha-response'],
    "remoteip"=>$_SERVER['REMOTE_ADDR']
)));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($curl), true);

curl_close($curl);

if($recaptcha['success'] === true){
    echo "Sucesso: Email => {$_POST['inputEmail']}";
}else {
    header("Location: reCaptcha.php");
}

?>