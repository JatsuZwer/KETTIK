<?php

use PHPMaileR\PHPMailer\PHPMailer;
use PHPMaileR\PHPMailer\Exception;

require 'PHPMailer-6.7.1/src/Exception.php';
require 'PHPMailer-6.7.1/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';

$email = $_POST['user_email'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'janat.sulaimanov@mail.ru';
$mail->Password = 'janatjatsu228';
$mail->SMTPSecure = 'ssl'
$mail->Port = 465;

$mail->setFrom('janat.sulaimanov@mail.ru');
$mail->addAddress('bakulia_sj@mail.ru');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body = '' .$email. 'оставил заявку';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}

?>