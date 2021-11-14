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
    <title>SHOP REVENUE REPORT | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header_shop.php'); ?>


    <div class="container px-5 py-4" id="shop-body">
        <a class="nav nav-item text-decoration-none text-muted mb-3" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <div class="mb-3 text-wrap" id="shop-header">
            <div class="position-relative d-flex overflow-hidden text-left text-white promo-banner-bg">
            <div class="p-lg-1 mx-auto my-4">
                <h1 class="display fw-normal"><?php echo $_GET["revenue_by"]; ?>  Revenue</h1>
                <span class="xsmall-font text-muted">Food photo created by jcomp - www.freepik.com</span>
            </div>
        </div>
            <h3 class="border-top py-3 mt-2">Summary of 25-29 Oct</h3>

                <p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Customers</h5>
                                <div class="card-body">
                                <h5 class="card-title">345</h5>
                                <p class="card-text">Fri 29 Oct</p>
                                <p class="card-text text-success">18.2% increase since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="card">
                                <h5 class="card-header">Total Orders</h5>
                                <div class="card-body">
                                <h5 class="card-title">43 Order</h5>
                                <p class="card-text">Fri 29 Oct</p>
                                <p class="card-text text-danger">2.6% decrease since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="card">
                                <h5 class="card-header">Revenue</h5>
                                <div class="card-body">
                                <h5 class="card-title">3,000 THB</h5>
                                <p class="card-text">Fri 29 Oct</p>
                                <p class="card-text text-success">4.6% increase since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="card">
                                <h5 class="card-header">Best Seller</h5>
                                <div class="card-body">
                                <h5 class="card-title">Boat noodle</h5>
                                <p class="card-text">Fri 29 Octs</p>
                                <p class="card-text text-success">2.5% increase since last month</p>
                                </div>
                        </div>
                    </div>
                    
                </div>


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