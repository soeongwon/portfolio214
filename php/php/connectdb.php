<?php
    $host = "localhost";
    $user = "portfolio214";
    $pw = "someone9305!";
    $dbName = "portfolio214";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "connection failed";
    }else{
        echo "connection ok";
    };
?>