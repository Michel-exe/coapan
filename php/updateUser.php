<?php
include("../php/validarSesion.php");
include("./validarAdmin.php");

if(!isset($_POST['upInp'])) die("Error peticion denegada");

include("./cn.php");


// password_hash($pass[$i],PASSWORD_BCRYPT, ['cost' => 10]);
$type=$_POST['uptype'];
if($type==="con"){
    $c= $_POST['upInp'];
    $co= md5($c);
    $sen= "UPDATE users SET condonacion = '$co', con = '$c' WHERE id = 1;";
    $sen.="UPDATE users SET condonacion = '$co', con = '$c' WHERE id = 2;";
    
    $val=mysqli_multi_query($con,$sen);
    if(!$val) die("Error al insertar datos");
    die(true);
}
$type = ($type==="nombre" ? "name" : ($type==="user" ? "user" : "password"));
// $inp = ($type!=="name" ? password_hash($_POST['upInp'],PASSWORD_BCRYPT, ['cost' => 10]) : $_POST['upInp']);
$inp = ($type!=="name" ? md5($_POST['upInp']) : $_POST['upInp']);
$id = $_POST['upid'];
// $sen = "UPDATE users SET $type = '$inp' WHERE id = $id";


/* RESPALDOS*/
$inpR = $_POST['upInp'];
$typeR = ($_POST['uptype']==="nombre" ? "historial" : ($_POST['uptype']==="user" ? "subLogin" : "subPass"));

$sen = "UPDATE users SET $type = '$inp', $typeR='$inpR'  WHERE id = $id";
/*************************** */


$val=mysqli_query($con,$sen);
if(!$val) die("Error al insertar datos");
echo true;

/*
    <?php
include("../php/validarSesion.php");
include("./validarAdmin.php");

if(!isset($_POST['upInp'])) die("Error peticion denegada");

include("./cn.php");

// password_hash($pass[$i],PASSWORD_BCRYPT, ['cost' => 10]);

$type=$_POST['uptype'];
$type =  ($type==="con" ? "condonacion" : ($type==="nombre" ? "name" : ($type==="user" ? "user" : "password")));
// $inp = ($type!=="name" ? password_hash($_POST['upInp'],PASSWORD_BCRYPT, ['cost' => 10]) : $_POST['upInp']);
$inp = ($type!=="name" ? md5($_POST['upInp']) : $_POST['upInp']);

$id = $_POST['upid'];
// $sen = "UPDATE users SET $type = '$inp' WHERE id = $id";


$inpR = $_POST['upInp'];
// echo $type;
$typeR =  ($type==="condonacion" ? "con" : ($_POST['uptype']==="nombre" ? "historial" : ($_POST['uptype']==="user" ? "subLogin" : "subPass")));

$sen = "UPDATE users SET $type = '$inp', $typeR='$inpR'  WHERE id = $id";

$val=mysqli_query($con,$sen);
if(!$val) die("Error al insertar datos");
echo true;


// echo "recibido: ".$type. " - val: ".$_POST['uptype'];
/*
UPDATE `users` SET `subLogin` = 'superAdmin', `subPass` = '12345678' WHERE `users`.`id` = 1;
UPDATE `users` SET `subLogin` = 'admin', `subPass` = '12345' WHERE `users`.`id` = 2;
UPDATE `users` SET `subLogin` = 'user1', `subPass` = '1234' WHERE `users`.`id` = 3;
UPDATE `users` SET `subLogin` = 'user2', `subPass` = '1234' WHERE `users`.`id` = 4;
UPDATE `users` SET `subLogin` = 'user3', `subPass` = '1234' WHERE `users`.`id` = 5;
UPDATE `users` SET `subLogin` = 'user4', `subPass` = '1234' WHERE `users`.`id` = 6;
UPDATE `users` SET `subLogin` = 'user5', `subPass` = '1234' WHERE `users`.`id` = 7;
UPDATE `users` SET `subLogin` = 'user6', `subPass` = '1234' WHERE `users`.`id` = 8;
*/
?>


