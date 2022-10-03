<?php
    include("../php/validarSesion.php");
    
    if(!isset($_POST['ide']) || !isset($_POST['opc'])) die("Recurso no encontrado");
    include("cn.php");

    $nur = $_POST['ide'];
    $opc = $_POST['opc'];
    
    try {
        $sen = "SELECT nombre,calle,numRegistro FROM tomas WHERE $opc LIKE '%$nur%' LIMIT 6";
        $res = mysqli_query($con, $sen);
        if(!$res) {
            die('Query Error' . mysqli_error($con));
          }
        
        if(!$res) die('Nur no existente');
    
        $json = array();
        while($row = mysqli_fetch_array($res)) {
          $json[] = array(
            'a' => $row[$opc],
            'n' => $row['numRegistro'],
          );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    } catch (\Throwable $th) {
        echo $th;
    }


?>