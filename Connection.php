<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adms_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);


    if($conn)
    {
       // echo "connection ok";
    }
    else
    {
       // echo "connection failed";
    }


?>