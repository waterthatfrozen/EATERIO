<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <title>My Cart | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="img/LOGO_BLACK.png" width="125" class="me-2" alt="EATERIO Logo">
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

    <div class="container px-5 py-4" id="cart-body">
        <div class="row my-4">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
            <h2 class="py-3 display-6 border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> My Cart
            </h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mb-5">
            <div class="col">
                <div class="row row-cols-1">
                    <div class="col">
                        <h5 class="fw-light">My Order</h5>
                        <p class="fw-light">From The Noodle Shop</p>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <!-- START CART ITEM -->
                            <li
                                class="list-group-item d-flex border-0 pb-3 border-bottom w-100 justify-content-between align-items-center">
                                <div class="image-parent"><img src="img/noodle.jpg" class="img-fluid rounded"
                                        style="width: 100px; height:100px; object-fit:cover;" alt="quixote"></div>
                                <div class="ms-3 me-auto">
                                    <div class="fw-normal"><span class="h5">1x</span> Pork Boat Noodle
                                        <p>50 THB<br />
                                            <span class="text-muted small"> No Veggie</span>
                                        </p>
                                        <a href="cust_update_cart.php?s_id=1&f_id=1"
                                            class="text-decoration-none text-success nav nav-item small">Edit item</a>
                                    </div>
                            </li>
                            <!-- END CART ITEM -->
                        </ul>
                        <div class="col my-3">
                            <ul class="list-inline justify-content-between">
                                <li class="list-inline-item fw-light me-5">Grand Total</li>
                                <li class="list-inline-item fw-bold">50 THB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3 mt-md-0">
                <div class="row row-cols-1">
                    <div class="col mb-3">
                        <div class="card p-2 p-md-4 border-0 border-bottom">
                            <h5 class="card-title fw-light">My Information</h5>
                            <ul class="card-text list-unstyled m-0 p-0 small">
                                <li>Name: Paphana Yiwsiw</li>
                                <li>Telephone Number: 0812345678</li>
                                <li>Email: 6222780379@g.siit.tu.ac.th</li>
                            </ul>
                        </div>
                    </div>
                    <form method="POST" action="#">
                        <div class="col mb-3">
                            <div class="card px-2 px-md-4 pb-2 pb-md-4 border-0">
                                <h5 class="card-title fw-light">Pick-Up Detail</h5>

                                <label for="pickuptime" class="form-label small">Pick-Up Date and Time</label>
                                <input type="datetime-local" class="form-control" name="pickuptime" id="pickuptime"
                                    min="2021-10-21T00:05:00" max="2021-10-22T18:00:00" value="2021-10-21T12:00:00">

                            </div>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary" name="payment" id="payment">Proceed with
                                payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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