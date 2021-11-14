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

    <div class="position-relative d-flex flex-column overflow-hidden text-center text-white promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-5">
            <h1 class="display fw-normal">SHOP REVENUE REPORT</h1>
            <p class="lead fw-normal">Food shop management system at SIIT Bangkradi Campus <span class="badge rounded-pill bg-warning reg-text text-dark">Under Construction</span></p>
            <div name="search-box" class="d-flex justify-content-center">
            <form class="fw-normal w-75" action="shop_report_summary.php" method="GET">
                <div class="input-group mb-3">
                    <select class="form-select"  id="inputGroupSelect01" name="revenue_by" >
                        <option selected value="-">Select option to see your revenue</option>
                        <!--change the value here-->
                        <option value="Daily">Today</option>
                        <option value="Weekly">This week</option>
                        <option value="Monthly">This month</option>
                    </select>
                    
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">Go</button>
                    </div>
                </div>
                
            </form>
            </div>
            <span class="smaller-font text-muted">Food photo created by jcomp - www.freepik.com</span>
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