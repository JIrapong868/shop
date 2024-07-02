<?php
    $host = "localhost";
    $user = "root";
    $pw = "123456";
    $db = "shop";

    $conn = new mysqli($host,$user,$pw,$db);

    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }
    echo"Connect Successfully";
    mysqli_set_charset($conn,"utf8");
?>