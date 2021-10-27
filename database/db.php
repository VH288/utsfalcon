<?php

    $host = "localhost";
    $user = "id17819090_falconuser";
    $pass = "Falcontugas_1234";
    $name = "id17819090_falcondatabase";

    $con = mysqli_connect($host,$user,$pass,$name);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }

?>