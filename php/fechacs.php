<?php
    include("cn.php");
    
    $sen="SELECT * FROM cs WHERE id='2'";
    $res=mysqli_query($con, $sen);
    while($row=mysqli_fetch_assoc($res)){
        echo $row['fecha'];
    }
?>