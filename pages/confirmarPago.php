<?php
    include("../php/validarSesion.php");
    include("../php/cn.php");
    $sen = 'SELECT numRegistro FROM pagos ORDER BY id DESC LIMIT 1';
    $res = mysqli_query($con,$sen);

    while ($row = mysqli_fetch_array($res)) {
        $numRec= (intval($row['numRegistro'])+1)."";
    }
    // echo $numRec."\n";
    $nur = $_POST['nur'];
    $fecHoy = $_POST['fecHoy'];
    $ultPag = $_POST['ultPag'];
    $ultMes = $_POST['ultMes'];
    $cuota = $_POST['cuota'];
    $cobranza = $_POST['cobranza'];
    $conexion = $_POST['conexion'];
    $rezagos = $_POST['rezagos'];
    $recargos = $_POST['recargos'];
    $coperacion = $_POST['coperacion'];
    $anticipos = $_POST['anticipos'];
    $varios = $_POST['varios'];
    $condona = $_POST['condona'];
    $importT = $_POST['importT'];
    $fondoNR = $_POST['fondoNR'];
    $fecha = $_POST['fecha'];
    $user=  $_SESSION['user'];

    // echo $nur." : ".$fecHoy." : ".$ultPag." : ".$ultMes." : ".$cuota." : ".$cobranza." : ".$conexion." : ".$rezagos." : ".$recargos." : ".$coperacion." : ".$anticipos." : ".$varios." : ".$condona." : ".$importT." : ".$fondoNR." : ".$user." : ".$fecha;


    $sent ="INSERT INTO pagos (subId,numRegistro,fecha,numRecibo,mesPaga,ultMes,cuota,cobranza,conexion,rezagos,recargos,coperacion,anticipos,varios,condona,importT,fondoNR,usuarioMovimiento,fechaMovimiento)VALUES('00','$nur','$fecHoy','$numRec','$ultPag','$ultMes','$cuota','$cobranza','$conexion','$rezagos','$recargos','$coperacion','$anticipos','$varios','$condona','$importT','0','$user','$fecha')";
    $val=mysqli_query($con,$sent);
    if(!$val) die("Error al hacer el pago");
    echo "Pago Realizado";
?>