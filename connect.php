<?php

    $db_server="localhost";
    $db_user="root";
    $db_password="root";
    $db_name="database";

    $connect=mysqli_connect($db_server, $db_user, $db_password, $db_name);
    if(!$connect){
        die("database connection failed".mysqli_connect_error());
    }
    else{
        echo "database connection is succesful";
    }


?>