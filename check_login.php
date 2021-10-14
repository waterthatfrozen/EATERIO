<?php
    include('conn_db.php');

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    $query = "SELECT c_username,c_firstname,c_lastname FROM customer WHERE
    c_username = '$username' AND c_pwd = '$pwd' LIMIT 0,1";

    $result = $mysqli -> query($query);
    if($result -> num_rows == 1){
        //customer login
        $row = $result -> fetch_array();
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["firstname"] = $row["c_firstname"];
        $_SESSION["lastname"] = $row["c_lastname"];
        $_SESSION["utype"] = "customer";
        ?>
        <script>
            alert("Welcome to EATERIO");
            window.location = "index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Wrong username and/or password!");
            history.back();
        </script>
        <?php
    }
?>