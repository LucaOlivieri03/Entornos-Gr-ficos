<?php
/*Ejercicio 2
- Confeccionar una página de Contacto que presente un formulario para que los visitantes
puedan enviar consultas al webmaster. */
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/735bc52976.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Consulta para Web Master</h1>

    <form method="post" action=''>
        <div class="mb-3">
            <label for="email" class="form-label">Tu dirección de email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="tumail@example.com">
        </div>
        <div class="mb-3">
            <label for="consulta" class="form-label">Ingrese su consulta para el webmaster</label>
            <textarea class="form-control" id="consulta" name="consulta" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if (isset($_POST['enviar'])) {
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



    }
?>