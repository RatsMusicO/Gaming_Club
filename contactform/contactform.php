<?php 

$name = $_POST['Nombre'];
$mail = $_POST['Email'];
$telefono = $_POST['Asunto'];
$empresa = $_POST['Mensaje'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Este message fue enviado por: ".$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$subject."\r\n";
$message .= "message: ".$_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'alexpro20167@gmail.com';
$asunto = 'Dudas/Consultas Gaming Club';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='http://servitecflhuaraz.com';</script>";

 ?>