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
………………………………………………………………………………………….
La cláusula or die() se utiliza para
………………………………………………..........................................................
y la función mysqli_error () se puede usar para
…………………………………………………………………………………………
Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo)
-->