<?php
    if(!isset($_POST['sen'])) die("Peticion Denegada");
    

    $con = mysqli_connect('localhost','root','','agua');
    mysqli_set_charset($con, "utf8");
    if(!$con) die("Coneccion Fallida: " . mysqli_connect_error());

    // echo $_POST['sen']. '<br>'.$_POST['fec'];

    $sen = $_POST['sen']; 
    $fec = $_POST['fec']; 
    $sen = "INSERT INTO setcs (sen, fecha) VALUES ('$sen', '$fec');";
    
    $val=mysqli_query($con,$sen);
    
    if(!$val) die("Error al validar"); 

    echo 1;
?>