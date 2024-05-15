<?php
function doble($i) {  # Función (Integer)
 return $i*2; # Operador de producto
}

$a = TRUE; # Variable booleana  # Operador de asignación
$b = "xyz"; # Variable string # Operador de asignación
$c = 'xyz'; # Variable string # Operador de asignación
$d = 12; # Variable Integer # Operador de asignación

echo gettype($a); # Función (type)  # Función (boolean)
echo gettype($b); # Función (type)  # Función (string)
echo gettype($c); # Función (type)  # Función (string)
echo gettype($d); # Función (type)  # Función (Integer)

if (is_int($d)) { # Estructura de control # Función (Integer) 
 $d += 4; # Operador de suma y asignación
}

if (is_string($a)) { # Estructura de control # Función (boolean) 
 echo "Cadena: $a";
}

$d = $a ? ++$d : $d*3; # Operador de asignación, condicional, suma y asignación (incremento), condicional (: es como un else) y producto. # Estructura de control

$f = doble($d++); # Variable Integer # Operador de asignación e incremento.  # Función (Integer)

$g = $f += 10; # Variable Integer # Operador de asignación e incremento.

echo $a, $b, $c, $d, $f , $g; # Función (boolean, string, string, Integer, Integer, Integer)

/* Salida:
BooleanStringStringInteger1xyzxyz184444

*/
?> 