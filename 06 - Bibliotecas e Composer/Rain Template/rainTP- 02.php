<?php

require_once("vendor/autoload.php");


use Rain\Tpl;

$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);

Tpl::configure( $config );

$tpl = new Tpl;

$tpl->assign( "name", "Pedro Portella" );
$tpl->assign( "version", PHP_VERSION );

$html = $tpl->draw( "index", true );



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 1;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->SMTPAuth = true;

$mail->Username = 'username@gmail.com';

$mail->Password = 'yourpassword';

$mail->setFrom('from@example.com', 'First Last');

$mail->addReplyTo('replyto@example.com', 'First Last');

$mail->addAddress('whoto@example.com', 'John Doe');

$mail->Subject = 'PHPMailer GMail SMTP test';

$mail->msgHTML($html);

$mail->AltBody = 'This is a plain-text message body';

$mail->addAttachment('images/phpmailer_mini.png');

if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}


function save_mail($mail)
{
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}