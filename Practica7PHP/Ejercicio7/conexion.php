<?php
    function conexion(){
        $bd = new PDO("mysql:host=localhost;dbname=base2", "root","");
        return $bd;
    }
?>