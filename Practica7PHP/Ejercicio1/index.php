
<html lang="es">
<head>

<?php 

    if(isset($_POST['colorBoton'])){
        $estilo = $_POST['colores'];
        setcookie("colores", $_POST['colores'], time() + (60 * 60 * 24 * 90));
    } else if(isset($_COOKIE['colores'])){
        $estilo = $_COOKIE['colores'];
    } else {
       $estilo = "";
    
    }

    echo '<link rel="stylesheet" href="styles'.$estilo.'.css" type="text/css">';

    ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <?php 
    


     ?>
</head>
<body>
    <section class="colorContainer">
        <form method="post" class="colorFormu">
            <label for="colores">Colores</label>
            <select name="colores">
                <option value="" selected>Default</option>
                <option value="rojo">Rojo</option>
                <option value="negro">Negro</option>
            </select>
            <button type="submit" value="enviado" name="colorBoton">Enviar</button>
        </form>
    </section>
</body>
</html>