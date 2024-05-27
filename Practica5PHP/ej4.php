<?php 
session_start();
if (!isSet($_SESSION['cont'])){
    $_SESSION['cont']=0;
}else{
    $_SESSION['cont']++;
}

echo 'Has ingresado a la página '.$_SESSION['cont'].' veces.'
?>