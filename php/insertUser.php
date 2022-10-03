<?php
    include("cn.php");
    // $user=["admin","user1","user2","user3"];
    // $name=["Brian","Joana","Geraldin","Sofia"];
    // $pass=["12345","1234","1234","1234"];
    $user=["user4","user5","user6","user7"];
    $name=["Wendy","Ale","Odette","Plata"];
    $pass=["1234","1234","1234","1234"];

    for ($i=0; $i < count($user); $i++) {
        $puser= md5($user[$i]);
        // $ppass= md5($pass[$i]);
        $ppass = password_hash($pass[$i],PASSWORD_BCRYPT, ['cost' => 10]);
        $sen = "INSERT INTO users (user, password, name, login) 
            VALUES ('$puser', '$ppass', '$name[$i]','$user[$i].-.$pass[$i]');";
        $val=mysqli_query($con,$sen);
        
        if(!$val) die("Error en el for");
        
        echo $val.'<br>';
    }

?>