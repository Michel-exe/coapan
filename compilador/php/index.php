<?php
    $var = $_POST["var"];
    $eti = $_POST["eti"];
    $ens = $_POST["ens"];

    $file = fopen('./file/Variables.txt', 'w');
    fwrite($file,"Var\t\t\tNombre\t\tvalor\t\ttamaño\n");
    fwrite($file,$var);

    $file = fopen('./file/Etiquetas.txt', 'w');
    fwrite($file,"Etiqueta\tValor\n");
    fwrite($file,$eti);
    
    $file = fopen('./file/Ensamblador.txt', 'w');
    fwrite($file,"Num\t\tValor\t\tBinario\n");
    fwrite($file,$ens);

?>