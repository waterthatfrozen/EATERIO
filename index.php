<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>EATERIO</title>
</head>
<body>
    <header class="p-2 bg-light text-dark fixed-top shadow-sm">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="img/logo-with-text.png" class="me-2" width="150" alt="EATERIO Logo">
                </a>
                <ul class="nav col-lg-auto me-lg-auto justify-content-center">
                    <li><a href="#" class="nav-link px-2 text-dark">Shop List</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Order History</a></li>
                </ul>
                <div class="mb-3 mb-lg-0 me-lg-3">&nbsp;</div>
                <div class="text-end">
                    <?php if(!isset($_SESSION['username'])){ ?>
                        <a class="btn btn-outline-secondary me-2" href="#">Sign Up</a>
                        <a class="btn btn-success" href="cust_login.php">Log In</a>
                    <?php }else{ ?>
                        <span class='me-2'> LOGGED IN! Welcome, <?=$_SESSION['username']?></span>
                        <a class="btn btn-outline-danger" href="logout.php">Log Out</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <div class="position-relative overflow-hidden p-3 text-center promo-banner-bg text-white">
            <div class="p-lg-5 mx-auto my-5">
            <h1 class="display fw-normal">Welcome to EATERIO</h1>
            <p class="lead fw-normal">Food ordering system of SIIT Bangkradi Campus Canteen</p>
            <a class="btn btn-warning disabled" href="#">Currently Under Construction</a>
            </div>
            <span class="smaller-font">
                <a class="nav-link text-muted" href="https://www.freepik.com/photos/food">Food photo created by jcomp - www.freepik.com</a>
            </span>
    </div>
    <br/><br/><br/>
    <div class="container">
    <h1 style="font-weight: 600;">Hello, World!</h1>
    <h2>This is EATERIO project</h2>
    <p>
        <strong>Members</strong><br/>
        <ul>
            <li>6222780379 Paphana Yiwsiw</li>
            <li>6222780668 Sirada Chaisawat</li>
            <li>6222780569 Thanakit Lerttomolsakul</li>
        </ul>
        <br/>
        Soon to come!
    </p>
    <?php
        if(isset($_SESSION['username'])){
            echo "LOGGED IN! Welcome, {$_SESSION['username']}<br/>";
            echo "<a href='logout.php'>Logout</a>";
        }else{
            echo "You didn't login yet!<br/>";
            echo "<a href='cust_login.php'>Customer Login</a><br/>";
            echo "<a href='shop/shop_login.php'>Shop Login</a>";
        }
        ?>
    </div>
    <footer class="d-flex fixed-bottom flex-wrap justify-content-between align-items-center px-5 py-1 bg-secondary text-light">
        <span class="smaller-font">&copy; 2021 SeriousEater Group</span>
        <ul class="nav justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-light" target="_blank" href="https://github.com/waterthatfrozen/EATERIO"><i class="bi bi-github"></i></a></li>
        </ul>
    </footer>
</body>
</html>