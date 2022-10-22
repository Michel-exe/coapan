<?php 
    include("../php/validarSesion.php");

    if(!isset($_POST['ultFe']) || !isset($_POST['ultPa'])) die("Peticion denegada");

    include("../php/cn.php");

    $tab_ultFecha=$_POST['ultFe'];
    $ultPago=$_POST['ultPa'];


    $ultFecha = explode("/", $tab_ultFecha);

    /* SE OBTIENE LA DIFERENCIA DE MESES DESDE SU ULTIMO PAGO HASTA HOY */
    $ini = $ultFecha[2] . "-" . $ultFecha[1] . "-" . $ultFecha[0];
    // $fin = date("Y-m-d");
    $fin = $ultPago;

    // echo $ini."|".$ultPago."\n";

    $datIni = new DateTime($ini . " 00:00:00");
    $datFin = new DateTime($fin . " 00:00:00");
    $interval = $datIni->diff($datFin);

    $difMes = $interval->format("%m");
    $difAño = ($interval->format("%y"));
    $difTot = $difMes + ($difAño * 12);

    $timeAdeudo = $difAño . " año(s) con " . $difMes . " mes(es)";
    // echo "diferencia en meses: ". $difMes."<br>";
    // echo "diferencia en años: ". $difAño ."<br>";
    // echo "meses en total: ".$difTot."<br>"."<br>";


    /*Se obtienen los datos de la tabla  */
    $sen = "SELECT * FROM cuotas";
    $res = mysqli_query($con, $sen);
    if (!$res) die('Error en la tabla');


    $cadCuotas = "<ul>";

    $tot = 0;
    $subCu = 0;
    // $cuota = 70;
    $inf = array();

    while ($row = mysqli_fetch_array($res)) {
        if(strtotime($fin) < strtotime($row['fecha']) ){
            break;
        }
        array_push($inf, array('fecha' => $row['fecha'], 'cuota' => $row['cuota']));
    }
    echo "\n";
    array_push($inf, array('fecha' => $fin, 'cuota' => $inf[count($inf) - 1]['cuota']));

    foreach ($inf as $row) {
        $fin = $row['fecha'];
        $fAct = strtotime($ini);
        $fDes = strtotime($fin);

        $resFec = ($fAct < $fDes ? 1 : 0);

        if ($resFec) {
            $datIni = new DateTime($ini);
            $datFin = new DateTime($fin);
            $interval = $datIni->diff($datFin);

            $difMes = $interval->format("%m");
            $difAño = ($interval->format("%y") * 12) / 12;
            $difTot2 = $interval->format("%m") + (($interval->format("%y") * 12));

            $subTot = ($difTot2) * $cuota;
            $tot += $subTot;

            $cadCuotas.="\n<li>De: ".$ini." a ".$fin." son <b>".$difTot2."</b> meses de adeudo a <b>$".$cuota."</b>: ".$subTot."</li>";
                
            $ini = $fin;
        }
        $cuota = $row['cuota'];
    }

    $cadCuotas .= "</ul>";
    echo $difTot."|".$timeAdeudo."|".$cadCuotas."|\n".$tot;
?>