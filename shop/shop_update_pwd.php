<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        session_start(); 
        include("../conn_db.php"); 
        if($_SESSION["utype"]!="shopowner"){
            header("location: ../restricted.php");
            exit(1);
        }
        $s_id = $_SESSION["sid"];
        if(isset($_POST["rst_confirm"])){
            $oldpwd = $_POST["old_pwd"];
            $newpwd = $_POST["new_pwd"];
            $newcfpwd = $_POST["new_cfpwd"];
            if($newpwd != $newcfpwd){
                ?>
                    <script>
                        alert('The new password is not match.\nPlease re-enter again.');
                        history.back();
                    </script>;
                <?php
                exit(1);
            }else{
                $query = "SELECT s_pwd FROM shop WHERE s_id = {$s_id} LIMIT 0,1;";
                $result = $mysqli -> query($query);
                $row = $result -> fetch_array();
                if($oldpwd == $row["s_pwd"]){
                    $query = "UPDATE shop SET s_pwd = '{$newpwd}' WHERE s_id = {$s_id};";
                    $result = $mysqli -> query($query);
                    if($result){
                        header("location: shop_profile.php?up_pwd=1");
                    }else{
                        header("location: shop_profile.php?up_pwd=0");
                    }
                }else{
                    ?>
                    <script>
                        alert('Your old password is not match.\nPlease re-enter again.');
                        history.back();
                    </script>
                    <?php
                    exit(1);
                }
            }
        }

        include('../head.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <title>Update shop password | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header_shop.php')?>

    <div class="container form-signin mt-auto w-50">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <form method="POST" action="shop_update_pwd.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-key me-2"></i>Update Shop Password</h2>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="old_pwd" minlength="8" maxlength="45" placeholder="Old Password" name="old_pwd"
                    required>
                <label for="old_pwd">Old Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="rst_pwd" minlength="8" maxlength="45" placeholder="New Password" name="new_pwd"
                    required>
                <label for="rst_pwd">New Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="rst_cfpwd" minlength="8" maxlength="45" placeholder="Confirm New Password"
                    name="new_cfpwd" required>
                <label for="rst_cfpwd">Confirm New Password</label>
                <div id="passwordHelpBlock" class="form-text smaller-font">
                    New password must be at least 8 characters long.
                </div>
            </div>
            <button class="w-100 btn btn-success my-3" name="rst_confirm" type="submit" onclick="return confirm('Do you want to update the shop password?');" >Update Shop Password</button>
        </form>
    </div>

    <footer
        class="footer d-flex flex-wrap justify-content-between align-items-center px-5 py-3 mt-auto bg-secondary text-light">
        <span class="smaller-font">&copy; 2021 SeriousEater Group<br /><span class="xsmall-font">Paphana Y. Sirada C.
                Thanakit L.</span></span>
        <ul class="nav justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-light" target="_blank" href="https://github.com/waterthatfrozen/EATERIO"><i
                        class="bi bi-github"></i></a></li>
        </ul>
    </footer>
</body>

</html>