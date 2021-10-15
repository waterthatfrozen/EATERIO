<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        session_start(); 
        if(!isset($_SESSION["utype"])||($_SESSION["utype"]!="shopowner")){
            ?>
            <script>
                alert("You have no permission to access this page");
                window.location = "../index.php";
            </script>
            <?php
            exit();
        }
        include("../conn_db.php"); 
        include('../head.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/main.css" rel="stylesheet">
    <title>SHOP HOME | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="../img/logo-with-text.png" width="125" class="me-2" alt="EATERIO Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link pe-2 text-dark" href="shop_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-2 text-dark">Customer Order</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-2 text-dark">Food Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-2 text-dark">Revenue Report</a>
                    </li>
                </ul>
                <div class="d-flex navbar text-end">
                    <span class="m-2 me-3">LOGGED IN! Welcome, some shop name <?//$_SESSION['username']?></span>
                    <a class="btn btn-outline-danger" href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </header>
    <div class="position-relative d-flex overflow-hidden text-center text-white promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-5">
            <h1 class="display fw-normal">SHOP OWNER HOME</h1>
            <p class="lead fw-normal">Food shop management system at SIIT Bangkradi Campus <span class="badge rounded-pill bg-warning reg-text text-dark">Under Construction</span></p>
            <div name="search-box" class="d-flex justify-content-center">
            <form class="fw-normal w-75" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search-q" placeholder="What food do you want to eat today?">
                    <button class="btn btn-secondary" type="submit" id="search-bt"><i class="bi bi-search"></i></button>
                </div>
            </form>
            </div>
            <span class="smaller-font text-muted">Food photo created by jcomp - www.freepik.com</span>
        </div>
    </div>

    <div class="container p-5" id="recommended-shop">
        <h2 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Recommended For You</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                <div class="card rounded-25">
                    <img src="../img/noodle.jpg" class="card-img-top rounded-25" alt="...">
                    <div class="card-body">
                        <h4 name="shop-name" class="card-title">Noodle Shop</h4>
                        <h5 class="card-subtitle pb-1"><span class="badge bg-success me-1">Open</span><span
                                class="badge bg-success">Pre-order avaliable</span></h5>
                        <p class="card-text">10:00 - 17:00</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                <div class="card rounded-25">
                    <img src="../img/noodle.jpg" class="card-img-top rounded-25" alt="...">
                    <div class="card-body">
                        <h4 name="shop-name" class="card-title">Noodle Shop</h4>
                        <h5 class="card-subtitle pb-1"><span class="badge bg-success me-1">Open</span><span
                                class="badge bg-success">Pre-order avaliable</span></h5>
                        <p class="card-text">10:00 - 17:00</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                <div class="card rounded-25">
                    <img src="../img/noodle.jpg" class="card-img-top rounded-25" alt="...">
                    <div class="card-body">
                        <h4 name="shop-name" class="card-title">Noodle Shop</h4>
                        <h5 class="card-subtitle pb-1"><span class="badge bg-success me-1">Open</span><span
                                class="badge bg-success">Pre-order avaliable</span></h5>
                        <p class="card-text">10:00 - 17:00</p>
                    </div>
                </div>
                </a>
            </div>
            
        </div>
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