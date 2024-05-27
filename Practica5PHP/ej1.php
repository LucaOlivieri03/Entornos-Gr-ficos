
<?php
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);

    try {

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pruebasentornos00@gmail.com';                     //SMTP username
        $mail->Password   = 'iimg sark tqmv kyrk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('pruebasentornos00@gmail.com', 'Pruebas Entornos');
        $mail->addAddress('ignaciolurati2@gmail.com', 'Nacho');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Prueba de envio de mail';
        $mail->Body    = '<h1>Envío de mail</h1> <b>Prueba de envío de mails mediante un php utilizando PHPMailer</b>';
        $mail->AltBody = 'Envio de mail por si no tenes html';

        $mail->send();
        echo 'El mensaje fue enviado';
    } catch (Exception $e) {
        var_dump($e);
        echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
    }
?>