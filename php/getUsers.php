<?php 
    include("./cn.php");
    include("../php/validarSesion.php");
    include("./validarAdmin.php");
    
    $sen= "SELECT id,name FROM users";
    $res = mysqli_query($con, $sen);
    $json = array();
    while($row = mysqli_fetch_array($res)){
        $json[] = array(
           'id' => $row['id'],
           'name' => $row['name']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>