<?php
#a)
    $fun = getdate();
    echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
    segundos, del $fun[mday]/$fun[mon]/$fun[year]";
/*La salida será:
    Has entrado en esta pagina a las (hora a la que se ingresó) horas, con (minutos de (hora a la que se ingresó) minutos y (segundos de la hora a la que se ingresó) segundos, del (dia actual en numero)/(mes actual en numero))/(año actual en numero)
    Le falta ingresar la zona horaria del usuario, de lo contrario mostrará la predeterminada por el servidor
*/
?>

<?php
#b)
    function sumar($sumando1,$sumando2){
    $suma=$sumando1+$sumando2;
    echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
/*La salida será:
5+6=11 
*/

?>