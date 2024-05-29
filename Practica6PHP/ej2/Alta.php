<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php

include("conexion.inc");
//Captura datos desde el Form anterior
$nombre = $_POST['Nombre'];
$pais = $_POST['Pais'];
$habitantes = $_POST['Habitantes'];
$superficie = $_POST['Superficie'];
$metro = $_POST['Metro'];

//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(ciudad_nombre) as cantnombre FROM ciudades WHERE ciudad_nombre='$nombre'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantnombre = mysqli_fetch_assoc($vResultado);

//$vCantnombre = mysqli_result($vResultado, 0);
if ($vCantnombre ['cantnombre']!=0){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
    $vSql = "INSERT INTO ciudades (ciudad_nombre, ciudad_pais, ciudad_habitantes, ciudad_superficie, ciudad_metro)
    values ('$nombre','$pais', '$habitantes', '$superficie', '$metro')";
     mysqli_query($link, $vSql) or die (mysqli_error($link));
     echo("La capital fue regitrada, pronto recibirás un email, confirmandote la actualización a
    nuestra página<br>");

    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>
