<?php
    include("./validarSesion.php");
    if(!isset($_POST['arr']) || !isset($_POST['pdf'])) die("Hubo un error inesperado");
    
    // pdfNotificaciones

    $arr = $_POST['arr'];
    $pdf = $_POST['pdf'];
    
    $newArray = explode('},{',$arr);
    $newArray[0]=substr($newArray[0],2);
    $newArray[count($newArray)-1]=substr($newArray[count($newArray)-1],0 ,-2);
    
    $daId=array();
    $daDa=array();
    for ($a=0; $a <count($newArray) ; $a++) { 
        $val=explode('"',$newArray[$a]);
        array_push($daDa,$val[7]);
        array_push($daId,$val[3]);
    }
    include("./cn.php");

    $sen ="";
    for ($i=0; $i <count($daId) ; $i++) { 
        $sen .="UPDATE $pdf SET campo = '$daDa[$i]' WHERE id = $daId[$i];";
    }
    $res = mysqli_multi_query($con,$sen);
    if(!$res) die("Disculpe hubo un error");

    echo "Actualizado";
?>