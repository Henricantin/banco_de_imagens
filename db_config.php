<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bank = "image_system";

    $conn = new mysqli($host, $user, $password, $bank);

    if($conn->connect_error){
        die("Erro na conexão: ".$conn->connect_error);
    }
?>