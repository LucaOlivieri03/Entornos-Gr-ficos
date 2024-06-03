<?php
    session_start();
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['psw']=$_POST['psw'];
    header("Location:mostrarsesion.php");
?>