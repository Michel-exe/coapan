<?php
    $con = mysqli_connect('localhost','root','','agua');
    mysqli_set_charset($con, "utf8");
    if(!$con){
        die("Coneccion Fallida: " . mysqli_connect_error());
    }
?>
