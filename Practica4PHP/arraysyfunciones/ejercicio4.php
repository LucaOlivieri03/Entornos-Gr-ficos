<form method="post" action="">
    <input type="text" name="nombre_usuario" id="nombre">
    <label for="nombre">Ingrese nombre de usuario</label>
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["nombre_usuario"])) {
        $nombre_usuario=$_POST["nombre_usuario"];
        comprobar_nombre_usuario($nombre_usuario);
    }

    function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
    } 

/* 
La función comprueba que el ingreso mediante un formulario de una variable sea el correcto dependiendo de los valores y longitud definidos por el sistema, devolviendo el texto "(nombre de usuario ingresado) es válido" o "(nombre de usuario ingresado) no es válido".
*/ 

?>

