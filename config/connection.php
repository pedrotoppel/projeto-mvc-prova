<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "mvc";

    $conn = new mysqli($host, $user, $password, $db);

    if($conn->connect_error){
        echo "erro ao conectar" . $conn->connect_errno;
    }
