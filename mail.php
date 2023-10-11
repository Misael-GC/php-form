<?php

require("vendor/autoload.php");

//Documentación de  https://packagist.org/packages/phpmailer/phpmailer
use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false){
//Configuración inicial de nuestro servidor de correos https://mailtrap.io/inboxes/2443601/messages
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '424aea7a70c842';
$phpmailer->Password = '5d03280b53c11a';

//Añadiendo destinatarios  - https://packagist.org/packages/phpmailer/phpmailer
$phpmailer->setFrom('fixtech@gmail.com', 'FixTech');
$phpmailer->addAddress($email, $name);

//Definiendo el contenido de mi email
$phpmailer->isHTML($html);                                  //Set email format to HTML
$phpmailer->Subject = $subject;
$phpmailer->Body    = $body;

//Mandar el correo
$phpmailer->send();
}

