<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';


$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'goraegorgora1306@gmail.com'; //SMTP username
$mail->Password = 'rexv bdfp hadr zktw'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->setFrom('goraegorgora1306@gmail.com', 'Odelle');
$mail->addAddress('goraegorgora1306@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'Booking';

$body = '<p><strong>Name:</strong>'.$_POST['Name'].'</p><p><strong>Phone:</strong>'.$_POST['Phone'].'</p>';
$mail->Body = $body;

$mail->send();
?>