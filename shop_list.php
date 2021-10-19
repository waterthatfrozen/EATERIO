<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>SHOP LIST | EATERIO</title>
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
                        <a href="#" class="nav-link px-3 text-dark">Order History</a>
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
    <div class="position-relative d-flex overflow-hidden text-left text-white promo-banner-bg">
        <div class="p-lg-1 mx-auto my-4">
            <h1 class="display fw-normal">Shop List</h1>
            <span class="xsmall-font text-muted">Food photo created by jcomp - www.freepik.com</span>
        </div>
    </div>

    <div class="container p-5" id="recommended-shop">
        <h3 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Avaliable Shop</h3>

        <!-- GRID SHOP SELECTION -->
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

            <!-- GRID EACH SHOP -->
            <div class="col">
                <a href="shop_menu.php?s_id=1" class="text-decoration-none text-dark">
                <div class="card rounded-25">
                    <img src="img/noodle.jpg" class="card-img-top rounded-25" alt="...">
                    <div class="card-body">
                        <h4 name="shop-name" class="card-title">Noodle Shop</h4>
                        <p class="card-subtitle">
                                <span class="badge rounded-pill bg-success">Open</span>
                                <span class="badge rounded-pill bg-success">Pre-order avaliable</span>
                        </p>
                        <p class="card-text my-2">Open hours: 10:00 - 17:00</p>
                        <div class="text-end">
                        <a href="shop_menu.php?s_id=1" class="btn btn-sm btn-outline-dark">Go to shop</a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- END GRID EACH SHOP -->
            
        </div>
        <!-- END GRID SHOP SELECTION -->
        
    </div>
    <footer
        class="footer d-flex flex-wrap justify-content-between align-items-center px-5 py-3 mt-2 bg-secondary text-light">
        <span class="smaller-font">&copy; 2021 SeriousEater Group<br /><span class="xsmall-font">Paphana Y. Sirada C.
                Thanakit L.</span></span>
        <ul class="nav justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-light" target="_blank" href="https://github.com/waterthatfrozen/EATERIO"><i
                        class="bi bi-github"></i></a></li>
        </ul>
    </footer>
</body>

</html>