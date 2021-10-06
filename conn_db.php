<?php
    $mysqli = new mysqli("localhost","root","","eaterio");

    if($mysqli -> connect_errno){
        echo "Failed to connect to database ". $mysqli->connect_error;
        exit();
    }
?>