<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
//configuracion para el acceso
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // SMTP de gmail
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'alexgalo819@gmail.com';                // Correo para acceder al correo
    $mail->Password   = 'Barcelona1899$';                       // Password de correo de la cuenta para acceder al correo
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
//fin de configuracion para el acceso
//configuracion para enviar el correo electronico
    $mail->setFrom('alexgalo819@gmail.com', 'Mailer');          // Desde donde voy a enviar el correo
    $mail->addAddress('alexgalo@rocketmail.com');           // A quien le voy a enviar el correo
    //$mail->addAddress('alexgalo@rocketmail.com', 'Joe User');           // A quien le voy a enviar el correo
// $mail->addAddress('ellen@example.com'); // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

    // Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = 'Hola este es un correo de prueba';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El mensage se envió correctamente';
} catch (Exception $e) {
    echo "El mensaje no se envió correctamente: {$mail->ErrorInfo}";
}
?>
