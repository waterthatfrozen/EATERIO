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
    <?php include('nav_header_shop.php');?>

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