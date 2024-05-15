<!-- a) -->

<html>
<head><title>Documento 1</title></head>
<body>
<?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;

    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col;$c++) {
            echo "<td>&nbsp;</td>\n";
        }   
        echo "</tr>\n";
    }

    echo "</table>\n";
?>
</body></html>

<!-- El programa genera una tabla de 5 filas y 2 columnas -->

<!-- b) -->

<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Edad: <input name="age" size="2">
        <input type="submit" name="submit" value="Ir">
    </form>
<?php
    }

else {
    $age = $_POST['age'];
    if ($age >= 21) {
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad';
 }
}
?>
</body></html>

<!-- El programa genera un formulario siempre y cuando el valor del botón no se haya enviado a través del método post (es decir, solamente la primera vez) y según la edad que ingresemos nos mostrará si somos mayores de 21 o no -->