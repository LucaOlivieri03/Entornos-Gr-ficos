
<?php
#a)
    $matriz = array("x" => "bar", 12 => true);
    echo $matriz["x"];
    echo $matriz[12];

/*La salida será:
bar1
*/ 
?>

<?php
#b)
    $matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
    echo $matriz["unamatriz"][6];
    echo $matriz["unamatriz"][13];
    echo $matriz["unamatriz"]["a"];

    /*La salida será:
5942
*/ 
?>

<?php
#c)
    $matriz = array(5 => 1, 12 => 2);
    $matriz[] = 56;
    $matriz["x"] = 42; unset($matriz[5]); unset($matriz);

    /*No tiene salidas solo define un array y luego lo borra*/ 
?> 

