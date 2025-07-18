<?php

    $servername = "sql102.infinityfree.com";
    $user = "if0_39501055";
    $password = "FuNmcigfNK";
    $database = "if0_39501055_if0_39501055";

    $conn = mysqli_connect($servername, $user, $password, $database);
    if(!$conn){
        die("connection failed" . $conn_mysql_error());
    }else{
        // echo "Connected....";
    }



?>