<?php
    include("../../php/validarSesion.php");
    include("../../php/validarAdmin.php");
    include("../../php/cn.php");

    $sen="SELECT * FROM pdfrecibodecobro";
    $que= mysqli_query($con,$sen);

    $daID= array();
    $daCampo= array();
    $daEst= array();

    $cD = 0;

    while($row = mysqli_fetch_array($que)){
        $cD++;
        array_push($daID,$row['id']);
        array_push($daCampo,$row['campo']);
        array_push($daEst,$row['estiloSection']);
    }

    // foreach ($dataCampo as $id) {
    //    echo $id."<br>";
    // }

    // echo $dataCampo[5];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <script>
        const CapaPDF = ()=>{
            const obj = {
                imgPDF : document.getElementById("imgPDF"),
                pdf: document.getElementById("pdf"),
                rang: document.getElementById("rangeScale").value
            }
            obj.imgPDF.style.width=`${1000*obj.rang}px`
            obj.pdf.style.width=`${1000*obj.rang}px`
            obj.pdf.style.fontSize=`${20*obj.rang}px`
            obj.pdf.style.height=`${obj.imgPDF.scrollHeight}px`
        }
    </script>
    <title>PDF Recibo de Cobro</title>
</head>
<body>
    <?php
        include("../../components/header.php");
    ?>
    <div class="PDF">
        <div class="viewPDF">
                <img src="../../documents/RECIBO-DE-COBRO-1.png" alt="pdf" id="imgPDF">
                <div class="pdf" id="pdf" style="font-size: 16px; font-weight: 300;">
                    <?php
                        for ($i=0; $i < $cD; $i++) { 
                            echo "
                            <section style='".$daEst[$i]."' >
                                <label id='campo".$daID[$i]."'>".$daCampo[$i]."</label>
                                <span data-element='input".$daID[$i]."'></span>
                            </section>";
                        }
                    ?>
                </div>
            <form class="btnPDF">
                <button>Restaurar</button>
                <button type="submit" data-form="pdfrecibodecobro">Guardar</button>
            </form>
        </div>
        <div class="rangePDF">
            <input type="range" min=".5" max="4" step="0.1" value=".5" id="rangeScale">
        </div>
        <div class="editPDF">
            <form id="editPDF">
                <h2>Editar PDF</h2>
                <?php
                    for ($i=0; $i < $cD; $i++) { 
                        echo "
                        <section>
                            <label for=''>Campo: </label>
                            <input type='text' value='". $daCampo[$i]."' data-element='campo".$daID[$i]."' id='input".$daID[$i]."' data-ide='".$daID[$i]."'>
                        </section>";
                    }
                    
                ?>
            </form>
        </div>
    </div>
    <?php
        echo "<script src='code.js'></script>"
    ?>
</body>
</html>