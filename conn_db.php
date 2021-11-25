<?php
    // For local use
    // $mysqli = new mysqli("localhost","root","","eaterio");
    // For heroku+cleardb use
    $mysqli = new mysqli("us-cdbr-east-04.cleardb.com","b82a0f96b86621","ebc3cbd3","heroku_3ce3734eedd7fb5");

    if($mysqli -> connect_errno){
        header("location: db_error.php");
        exit(1);
    }

    $mysqli -> set_charset("utf8mb4");
    define('SITE_ROOT',realpath(dirname(__FILE__)));
    date_default_timezone_set('Asia/Bangkok');
?>