<?php
$to='lavacaloca113@gmail.com';
$subjet='hola';
$message='hola';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: Luca <pruebasentornos00@gmail.com>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
mail ($to,$subjet,$message,$headers);
?>
