<?php
    $servername ="localhost";
    $username ="root";
    $password = "root";
    $db_name ="database1";
    $conn = new mysqli($servername, $username, $password,$db_name );

    if($conn->connect_error)
    {
        die("Connnection failed".$conn->connect_error);    }




    echo "sadfsd";


    ?> 