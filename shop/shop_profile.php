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
                        <a href="#" class="nav-link pe-2 text-dark">Shop Profile</a>
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

    <div class="container p-5" id="shop-profile"> <!--problem -->
        <h2 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Shop Profile</h2>
        <div class="position-relative d-flex overflow-hidden text-center py-3">
            <div class="p-lg-2 mx-auto my-3">
            
                <div class="rounded-25 mb-5" id="shop-img" style="
                    background: url('../img/noodle.jpg') center; height: 200px;
                    background-size: cover; background-repeat: no-repeat;
                    background-position: center;">
                </div>
<!-- GRID SHOP INFORMATION -->
                <div class="container">
                    <div class="row row-cols-2 text-start">
                        <div class="col mb-4">Shop name</div>
                        <div class="col mb-4 border">THE NOODLE SHOP</div>
                        <div class="col mb-4">Open status</div>
                        <div class="col mb-4 border">Open</div>
                        <div class="col mb-4">Pre-order status</div>
                        <div class="col mb-4 border">Available</div>
                        <div class="col mb-4">Location</div>
                        <div class="col mb-4 border">SIIT Bangkradi Campus Canteen Unit #2</div>
                        <div class="col mb-4">Open hours</div>
                        <div class="col mb-4 border">10:00 - 17:00</div>
                        <div class="col mb-4">Telephone number</div>
                        <div class="col mb-4 border">081-2345678</div>
                    </div>
                </div>
<!-- END SHOP INFORMATION -->
                <div class="text-end">
                    <a href="shop_profile_edit" class="btn btn-sm btn-outline-dark">Edit</a>
                </div>
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