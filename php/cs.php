<?php
    include("cn.php");

    /* Actualizar fecha de la ultima copia de seguridad */
    if(!isset($_POST['act'])) die("Corriendo Sistema con ormalidad");
    $act = $_POST['act'];
    $sen="UPDATE cs SET fecha ='$act' WHERE id='3'";
    $res=mysqli_query($con, $sen);
    if(!$res) die("Error en la insercion");

    /* Contar cuantos usuarios son */
    $sen="SELECT * FROM users";
    $res=mysqli_query($con, $sen);
    $a=0;
    while($row=mysqli_fetch_assoc($res)) {$a++;}
    
    /* Obtener todos los campos actuales */
    $sen= "SELECT * FROM users";
    $res = mysqli_query($con, $sen);
    $cad="INSERT INTO `cs` (`id`, `user`, `password`, `name`, `subLogin`, `subPass`) VALUES ";
    $b=0;
    while($row=mysqli_fetch_assoc($res)) {
        $cad.='('. $row["id"] . ',"'.$row["user"].'","'.$row["password"].'","'.$row["name"].'","'.$row["subLogin"].'","'.$row["subPass"].'")';
        if($b!=$a-1){
            $cad.=",";
        }
        $b++;
    }
    echo $cad.";";
?>