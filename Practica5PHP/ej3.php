<?php
/*Ejercicio 3
- Escribir un script para que un visitante recomiende el sitio a un amigo.  */
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
    <h1>¡Recomienda el sitio a tu amigo!</h1>

    <form method="post" action=''>
        <div class="mb-3">
            <label for="nombre" class="form-label">Tu nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Alan Rodriguez" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Direccion de mail de tu amigo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" required>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if (isset($_POST['enviar']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'pruebasentornos00@gmail.com';                     //SMTP username
            $mail->Password   = '';                               //SMTP password (incompleta por razones de seguridad en github)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('pruebasentornos00@gmail.com', 'Pruebas Entornos');
            $mail->addAddress($_POST['email'], $_POST['email']);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Recomendacion de tu amigo '.$_POST['nombre'].'!';
            $mail->Body    = '<h1>Chequea este sitio web ¡Es genial!</h1>';
            $mail->AltBody = 'Chequea este sitio web ¡Es genial!';

            $mail->send();
            echo 'El mensaje fue enviado';
        } catch (Exception $e) {
            var_dump($e);
            echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
        }



    }else if (isset($_POST['enviar'])){
        echo 'El mail ingresado es inválido';
    }

?>

