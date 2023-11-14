
<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$replyToEmail = 'correodepruebaphpmailer0@gmail.com';
$replyToName = 'DUEÑO DEL CORREO';
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = 'correodepruebaphpmailer0@gmail.com';
    $mail->Password = 'myqugwehytgqmsuo';
    $mail->setFrom('correodepruebaphpmailer0@gmail.com', 'DUEÑO DEL CORREO');
    $mail->addReplyTo($replyToEmail, $replyToName);
    $mail->addAddress('MarcoLopez221103@gmail.com','Cliente Prueba');
    $mail->isHTML(true);
    $mail->Subject = 'CORREO DE PRUEBA';
    $mail->CharSet = 'UTF-8';
    $mail->Body = 'ESTE ES EL MENSAJE DEL CORREO DE PRUEBA';

    if ($mail->send()) {
        // Puedes añadir acciones o mensajes de éxito aquí si lo necesitas
    }
} catch (Exception $e) {
    echo 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
}
?>