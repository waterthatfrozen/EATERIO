<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>Welcome | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include('nav_header.php')?>

    <div class="position-relative d-flex overflow-hidden text-center text-white promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-5">
            <h1 class="display-5 fw-normal">Welcome to EATERIO</h1>
            <p class="lead fw-normal">Food ordering system of SIIT Bangkradi Campus Canteen</p>
            <div name="search-box" class="d-flex justify-content-center">
                <!-- SEARCH FUNCTION WILL DO LATER -->
                <form class="fw-normal w-75" method="GET" action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search-q"
                            placeholder="What food do you want to eat today?">
                        <button class="btn btn-secondary" type="submit" id="search-bt"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <span class="xsmall-font text-muted">Food photo created by jcomp - www.freepik.com</span>
        </div>
    </div>

    <div class="container p-5" id="recommended-shop">
        <h2 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Recommended For You</h2>

        <!-- GRID SHOP SELECTION -->
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

        <?php
            $query = "SELECT s_id,s_name,s_openhour,s_closehour,s_status,s_preorderstatus,s_pic FROM shop
            WHERE s_status = 1 OR s_preorderstatus = 1";
            $result = $mysqli -> query($query);

            while($row = $result -> fetch_array()){
        ?>
            <!-- GRID EACH SHOP -->
            <div class="col">
                <a href="<?php echo "shop_menu.php?s_id=".$row["s_id"]?>" class="text-decoration-none text-dark">
                    <div class="card rounded-25">
                        <img 
                        <?php
                            if(is_null($row["s_pic"])){echo "src='img/default.png'";}
                            else{echo "src=\"img/{$row['s_pic']}\"";}
                        ?> 
                        style="width:100%; height:175px; object-fit:cover;"
                        class="card-img-top rounded-25 img-fluid" alt="<?php echo $row["s_name"]?>">
                        <div class="card-body">
                            <h4 name="shop-name" class="card-title"><?php echo $row["s_name"]?></h4>
                            <p class="card-subtitle">
                                <?php 
                                    $now = date('H:i:s');
                                    if((($now < $row["s_openhour"])||($now > $row["s_closehour"]))||($row["s_status"]==0)){
                                ?>
                                <span class="badge rounded-pill bg-danger">Closed</span>
                                <?php }else{ ?>
                                <span class="badge rounded-pill bg-success">Open</span>
                                <?php }
                                    if($row["s_preorderstatus"]==1){
                                ?>
                                <span class="badge rounded-pill bg-success">Pre-order avaliable</span>
                                <?php }else{ ?>
                                <span class="badge rounded-pill bg-danger">Pre-order Unavaliable</span>
                                <?php } ?>
                            </p>
                            <?php 
                                $open = explode(":",$row["s_openhour"]);
                                $close = explode(":",$row["s_closehour"]);
                            ?>
                            <p class="card-text my-2">Open hours: <?php echo $open[0].":".$open[1]." - ".$close[0].":".$close[1];?></p>
                            <div class="text-end">
                                <a href="<?php echo "shop_menu.php?s_id=".$row["s_id"]?>" class="btn btn-sm btn-outline-dark">Go to shop</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END GRID EACH SHOP -->
        <?php }
        $result -> free_result();
        ?>
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