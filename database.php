<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "consumables_management_system";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        // echo "Connected!";
    }
    catch(mysqli_sql_exception){
        // echo "Could not connect!";
    }
?>