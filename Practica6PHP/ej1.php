<!-- 
Ejercicio 1: Completar

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:
mysqli_connect()

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
 mysqli_connect($hostname , $nombreUsuario , $contraseña);

$hostname es un nombre de servidor (dato que debemos consultar en nuestra cuenta de hosting).
$nombreUsuario es el nombre de usuario de base de datos, nombre que habremos especificado al crear la base de datos (si no lo hemos hecho, puede ser root).
$contraseña es la contraseña de acceso para el usuario de base de datos, contraseña que habremos especificado al crear la base de datos.

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
mysqli_select_db ()

Esta función debe pasar como parámetro
mysqli_ select_db ($nombreConexión, $nombreBaseDatos);


La función mysqli_query () se utiliza para
ejecutar una consulta a la base de datos que especifiquemos.

y requiere como parámetros
mysqli_query($nombreConexion, "Consulta aquí"); ó
mysqli_query($nombreConexion, $query);
"Consulta aquí" se refiere a una consulta
realizada utilizando el lenguaje SQL de consultas
a bases de datos. 

La cláusula or die() se utiliza para
manejar errores durante la ejecución de consultas a la base de datos. Esta cláusula es parte del código PHP y no de MySQL en sí, y 
su función es detener la ejecución del script si se produce un error en la consulta y mostrar un mensaje de error específico.

y la función mysqli_error () se puede usar para
Devolver el último mensaje de error para la llamada más
reciente a una función de MySQLi que puede haberse
ejecutado correctamente o haber fallado.

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo)

-->

<?php
        /*
        while ($fila = mysqli_fetch_array($vResultado))  Transforma la información devuelta por la base de datos en un array
        {
        ?>
        <tr>
        <td><?php echo ($fila[0]); ?></td>               Muestra la información del array que contiene la base de datos 
        <td><?php echo ($fila[1]); ?></td>                                            ||
        <td><?php echo ($fila[2']); ?></td>                                           ||
        </tr>
        <tr>
        <td colspan="5">
        <?php
        }
        mysqli_free_result($vResultado);                 Libera la memoria asociada con el resultado de una consulta MySQL                                      
        mysqli_close($link);                             Cierra la conexión con la base de datos
        */
?>
