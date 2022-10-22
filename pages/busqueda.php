<?php
include("../php/validarSesion.php");

if (!isset($_GET['ide'])) die("Recurso inexistente");

include("../php/cn.php");
$nur = $_GET['ide'];

$sen = "SELECT * FROM tomas WHERE numRegistro = '$nur'";
$res = mysqli_query($con, $sen);

if (!$res) die('Nur no existente');
$c = 0;
while ($row = mysqli_fetch_array($res)) {
    $tab_contrato = $row['contrato'];
    $tab_nombre = $row['nombre'];
    $tab_tipo = $row['tipo'];
    $tab_ultFecha = $row['ultFecha'];
    $tab_cuota = $row['cuota'];
    $tab_saldo = $row['saldo'];
    $tab_estado = $row['estado'];

    $dir = "Calle: " . $row['calle'] . " mzn." . $row['mzn'] . " n. " . $row['num'] . ". Entre calle: " . $row['calle1'] . " y calle: " . $row['calle2'] . ". En la colonia: " . $row['colonia'] . " de Nanacamilpa De Mariano Arista Tlaxcala Mexico.";
    $col = ($row['colonia'] === "ARENAS" ? "DOMINGO+" . $row['colonia'] : $row['colonia']);
    $dirLink = "calle+" . $row['calle'] . "+" . $row['num'] . ",+" . $col . "+Cd+Nanacamilpa+Tlax";

    $c++;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Busqueda</title>
</head>

<body>
    <?php
    include("../components/header.php");
    include("../components/search.php");
    if ($c == 0) {
        $_SESSION['errorImg'] = "searchFailed";
        $_SESSION['errorMSJ'] = "Valor Inexistente";
        include("../components/errors.php");
        echo "<script src='code.js'></script>";
        die();
    }
    // [$difTot, $timeAdeudo,$cadCuotas,$tot] = calcularFecha($con, $tab_ultFecha);

    ?>
    <div class="nur">
        <form id="nur" class="nurForm">
            <section>
                <label for="">Nur:</label>
                <input type="text" disabled id="camNur" value="<?php echo $nur ?>">
            </section>
            <section>
                <label for="">Nombre:</label>
                <input type="text" disabled value="<?php echo $tab_nombre ?>">
            </section>
            <section>
                <label for="">Tipo de Servicio:</label>
                <input type="text" disabled value="<?php echo $tab_tipo ?>">
            </section>
            <section>
                <label for="">Direccion:</label>
                <textarea><?php echo $dir; ?></textarea>
                <a href="https://www.google.com.mx/maps/search/<?php echo $dirLink; ?>" target="_blank">Ver en Google Maps</a>
            </section>
            <section>
                <label for="">Tiempo de adeudo:</label>
                <!-- <input type="text" disabled value="<php echo $timeAdeudo ?>"> -->
                <input type="text" id="timeAde" disabled>
            </section>
            <section>
                <label for="">No. Contrato:</label>
                <input type="text" disabled value="<?php echo $tab_contrato ?>">
            </section>
            <section>
                <label for="">Cuotas:</label>
                <div id="cuo">

                </div>
                <!-- <php echo $cadCuotas; ?> -->
            </section>
            <section>
                <label for="">Ultimo Pago:</label>
                <input type="text" id="ultPago" disabled value="<?php echo $tab_ultFecha ?>">
            </section>
            <section>
                <label for="">Cuota:</label>
                <!-- <input type="text" disabled value="<php echo $tot ?>"> -->
                <input type="text" id="cuota" disabled>
            </section>
            <section>
                <label for="">Meses de adeudo:</label>
                <!-- <input type="text" disabled value="<php echo $difTot ?>"> -->
                <input type="text" id="mesesAdeudo" disabled>
            </section>
            <section>
                <label for="">Recargos:</label>
                <input type="checkbox" id="recargos">
            </section>

            <section class="cond">
                <label for="">Paga:</label>
                <label for=""></label>
                <!-- <input type="text" disabled data-value="<php echo $tot ?>" value="<php echo $tot ?>"> -->
                <input type="text" id="cuota2" disabled value="">
                <input type="checkbox" title="Condonacion" id="validarCondonacion">
            </section>
            <section>
                <label for="">Tiempo hasta donde paga</label>
                <input type="month" id="month">
            </section>
            <button type="submit">Confirmar Pago</button>

            <!-- <section>
                <label for="">Pago:</label>
                <input type="text" disabled value="< echo "--- $$$" ?>">
            </section>
            <section>
                <label for="">Recargos:</label>
                <input type="text" disabled value="< echo "--- $$$" ?>">
            </section>
            <section>
                <label for="">Total:</label>
                <input type="text" disabled>
            </section>
            <section class="busEst">
                <label>Estado:</label>
                <input type="text" class="< echo $tab_estado ?>" disabled value="< echo $tab_estado ?>" id="status">
            </section>
            <button type="submit">Guardar</button> -->
        </form>
    </div>
    <!-- busquedaUltPago.php -->
    <script>

        
        const ultFe = document.getElementById("ultPago")
        const month = document.getElementById("month")
        const d = new Date();
        month.value=d.getFullYear()+"-"+((d.getMonth()+1)+"").padStart(2,"0");

        document.getElementById("nur").addEventListener("submit",async e =>{
            e.preventDefault()
            const meses=["","ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEP","OCT","NOV","DIC"]
            const rec= document.getElementById("recargos").checked ? 1 : 0;
            let arrUltFe= ultFe.value.split("/")
            let arrMonth= month.value.split("-")
            let ultPago = (meses[parseInt(arrUltFe[1])]+" "+(arrUltFe[2]))+" - "+(meses[parseInt(arrMonth[1])]+" "+arrMonth[0])
            const fecHoy=((d.getDate())+"").padStart(2,"0")+"/"+((d.getMonth()+1)+"").padStart(2,"0")+"/"+d.getFullYear()
            const cuo= parseInt(document.getElementById("cuota2").value);
            const data = new FormData();
            data.append("fecHoy",fecHoy);
            data.append("nur",document.getElementById("camNur").value);
            data.append("ultPag",ultPago);
            data.append("ultMes","1"+"/"+arrMonth[1]+"/"+arrMonth[0]);
            data.append("cuota",document.getElementById("cuota").value);
            data.append("cobranza",cuo);
            data.append("conexion","0");
            data.append("rezagos","0");
            data.append("recargos",rec);
            data.append("coperacion","0");
            data.append("anticipos","0");
            data.append("varios","0");
            data.append("condona",cuo);
            data.append("importT",rec ? (cuo*.2)+cuo : cuo);
            data.append("fondoNR","0");
            data.append("fecha",fecHoy+" "+(d.getHours()+"").padStart(2,"0")+":"+(d.getMinutes()+"").padStart(2,"0")+":"+(d.getSeconds()+"").padStart(2,"0"));
            await fetch("confirmarPago.php",{
                method:"POST",
                body:data
                })
                .then(r => r.text())
                .then(res => console.log(res))
        })

        // month.value="2021-07"
        const rellenar = (mesesAdeudo,timeAde,cuotas,cuota)=>{
            document.getElementById("timeAde").value=timeAde;
            document.getElementById("cuo").innerHTML=cuotas;
            document.getElementById("mesesAdeudo").value=mesesAdeudo;
            document.getElementById("cuota").value=cuota;
            document.getElementById("cuota2").value=cuota;
        }

        const moreInfo = async(mes)=>{
            const da= new FormData()
            da.append("ultFe",ultFe.value)
            da.append("ultPa",mes+"-01");
            await fetch("./busquedaUltPago.php",{
                method:"POST",
                body: da
            })  .then(res => res.text())
                .then(r => {
                    // console.log(r)
                    r=r.split("|")
                    rellenar(r[0],r[1],r[2],r[3])
                })
        }
        moreInfo(month.value)


        document.getElementById("month").addEventListener("input",e =>{
            moreInfo(e.target.value);
            console.log(e.target.value);
        })

        document.getElementById("validarCondonacion").addEventListener("change", async e => {
            if (!e.target.checked) return;

            e.target.checked = false;
            let pass = window.prompt("Escriba la contraseña");

            if(pass==null) return;

            let d = new FormData();
            d.append("sub", pass);
            await fetch("../php/subPassword.php", {
                    method: 'POST',
                    body: d
                }).then(res => res.text())
                .then(r => {
                    if (r != "0") {
                        e.target.checked = true;
                        e.target.previousElementSibling.removeAttribute("disabled");
                        // e.target.previousElementSibling.value = e.target.previousElementSibling.getAttribute("data-value")
                        return
                    }
                })
        })
    </script>
    <script src="code.js"></script>
</body>

</html>
