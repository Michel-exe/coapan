<?php
session_start();
// echo $_SESSION['name'];
// $varsesion = $_SESSION['name'];
// if(!isset($_SESSION['name']))

$r="location:https://www.google.com/";
if(!isset($_SESSION['name'])) {
    header($r);
    die("Error Sesion No definida");
}

if($_SESSION['name'] == null || $_SESSION['name'] == ''){
    header($r);
    die("Error Sesion Vacia");
}

// } else{
//     echo 1;
// }
// if($varsesion == null || $varsesion == ''){
//     header("https://www.google.com/");
//     die();
// }
?>