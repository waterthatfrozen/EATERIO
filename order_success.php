<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">

    <title>Successfully Order | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="img/logo-with-text.png" width="125" class="me-2" alt="EATERIO Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="shop_list.php" class="nav-link px-3 text-dark">Shop List</a>
                    </li>
                    <li class="nav-item">
                        <a href="cust_order_history.php" class="nav-link px-3 text-dark">Order History</a>
                    </li>
                </ul>
                <div class="d-flex text-end">
                    <?php if(!isset($_SESSION['username'])){ ?>
                    <a class="btn btn-outline-secondary me-2" href="cust_regist.php">Sign Up</a>
                    <a class="btn btn-success" href="cust_login.php">Log In</a>
                    <?php }else{ ?>
                    <span class="m-2 me-3"> LOGGED IN! Welcome, <?=$_SESSION['username']?></span>
                    <a class="btn btn-outline-danger" href="logout.php">Log Out</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <div class="mt-5"></div>
    <div class="container form-signin text-center reg-success mt-auto">
            <i class="mt-4 bi bi-cart-check text-success h1 display-1"></i>
            <h4 class="mt-2 fw-normal text-bold">Your order has been placed.</h4>
            <h5 class="mb-3 fw-normal text-bold">Order #2021102103090001</h5> 
            <p class="mb-3 fw-normal text-bold text-wrap">We'll notify the shop in a few moments. <br/>You can check status in order history menu.</p>
            <a class="btn btn-success btn-sm w-50" href="index.php">Return to Home</a>
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