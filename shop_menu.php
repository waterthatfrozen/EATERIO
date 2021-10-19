<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <title>NOODLE SHOP MENU | EATERIO</title>
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

    <div class="container px-5 py-4" id="shop-body">
        <a class="nav nav-item text-decoration-none text-muted mb-3" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <div class="mb-3 text-wrap" id="shop-header">
            <div class="rounded-25 mb-4" id="shop-img" style="
                    background: url('img/noodle.jpg') center; height: 200px;
                    background-size: cover; background-repeat: no-repeat;
                    background-position: center;">
            </div>
            <h1 class="display-5 strong">THE NOODLE SHOP</h1>
            <ul class="list-unstyled">
                <li class="my-2">
                    <span class="badge rounded-pill bg-success">Open</span>
                    <span class="badge rounded-pill bg-danger">Close</span>
                    <span class="badge rounded-pill bg-success">Pre-order avaliable</span>
                    <span class="badge rounded-pill bg-danger">Pre-order Unavaliable</span>
                </li>
                <li class="small">SIIT Bangkradi Campus Canteen Unit #2</li>
                <li class="small">Open hours: 10:00 - 17:00</li>
                <li class="small">Telephone number: (+66) 081-2345678</li>
            </ul>
        </div>

        <!-- GRID MENU SELECTION -->
        <h3 class="border-top py-3 mt-2">Menu</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 align-items-stretch mb-1">

            <!-- GRID EACH MENU -->

            <div class="col">
                <div class="card rounded-25 mb-4">
                    <a href="food_item.php?s_id=1&f_id=1" class="text-decoration-none text-dark">
                        <div class="card-img-top">
                            <img src="img/noodle.jpg" class="h-25" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fs-5">Pork Boat Noodle</h5>
                            <p class="card-text">50 THB</p>
                            <a href="#" class="btn btn-sm mt-3 btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg> Add to cart
                            </a>
                        </div>
                    </a>
                </div>
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