<title>Modificacion</title>
</head>
<boby>
<?php

include ("conexion.inc");
//Captura datos desde el Form anterior
$nombre = $_POST['nombre'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE ciudad_nombre ='$nombre' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Ciudad Inexistente...!!! <br>");
 echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
 <td width="103"> Nombre: </td>
 <td width="243"> <input type="text" name="nombre" value="<?php
echo($fila['ciudad_nombre']); ?>" required> 
 </td>
</tr>
<tr>
 <td width="103"> Pais: </td>
 <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20"
 value="<?php echo($fila['ciudad_pais']); ?>" required>
 </td>
 </tr>
 <tr>
 <td width="103"> Habitantes </td>
 <td width="243"> <input type="number" name="habitantes" size="20" maxlength="20"
 value="<?php echo($fila['ciudad_habitantes']); ?>" required>
 </td>
 </tr>
<tr>
 <td width="103"> Superficie: </td>
 <td width="243"> <input type="TEXT" name="superficie" size="20" maxlength="40"
 value="<?php echo($fila['ciudad_superficie']); ?>" required>
 </td>
 </tr>
 <tr>
 <td width="103"> Tiene metro? (1 si, 0 no): </td>
 <td width="243"> <input type="number" name="metro" size="20" maxlength="40"
 value="<?php echo($fila['ciudad_metro']); ?>" min="0" max="1" required>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center"> <button type="SUBMIT" name="Submit"
 value="<?php
echo($fila['ciudad_nombre']); ?>">Modificar</button>
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>