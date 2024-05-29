<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$nombre = $_POST['nombre'];
$nombreViejo = $_POST['Submit'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$metro = $_POST['metro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set ciudad_nombre='$nombre', ciudad_pais='$pais', ciudad_habitantes='$habitantes', ciudad_superficie='$superficie', ciudad_metro = '$metro' WHERE
ciudad_nombre='$nombreViejo'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>