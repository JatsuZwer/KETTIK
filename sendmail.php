<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$email = $_POST['user_email'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'janat.sulaimanov@mail.ru';
$mail->Password = 'janatjatsu228';
$mail->SMTPSecure = 'ssl'
$mail->Port = 465;

$mail->setFrom('janat.sulaimanov@mail.ru');
$mail->addAddress('janat.sulaimanov@mail.ru');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body = '' $email 'оставил заявку';
$mail->AltBody = '';
?>