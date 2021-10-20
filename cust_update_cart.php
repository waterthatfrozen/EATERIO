<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <script type="text/javascript" src="js/input_number.js"></script>
    <title>Food Item | EATERIO</title>
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

    <div class="container px-5 py-4" id="shop-body">
        <div class="row my-4">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mb-5">
            <div class="col mb-3 mb-md-0">
                <img src="img/noodle.jpg" class="img-fluid rounded-25 float-start" alt="...">
            </div>
            <div class="col text-wrap">
                <h1 class="fw-light">PORK BOAT NOODLE</h1>
                <h3 class="fw-light">50 THB</h3>
                <ul class="list-unstyled mb-3 mb-md-0">
                    <li class="my-2">
                        <span class="badge rounded-pill bg-success">Avaliable</span>
                        <span class="badge rounded-pill bg-danger">Unavaliable</span>
                        <span class="badge rounded-pill bg-success">Pre-order avaliable</span>
                        <span class="badge rounded-pill bg-danger">Pre-order Unavaliable</span>
                    </li>
                </ul>
                <div class="form-amount">
                    <form class="mt-3" method="POST" action="#">
                        <div class="input-group mb-3">
                            <button id="sub_btn" class="btn btn-outline-secondary" type="button" title="subtract amount"
                                onclick="sub_amt('amount')">
                                <i class="bi bi-dash-lg"></i>
                            </button>
                            <input type="number" class="form-control text-center border-secondary" id="amount"
                                name="amount" value="1" min="1" max="99">
                            <button id="add_btn" class="btn btn-outline-secondary" type="button" title="add amount"
                                onclick="add_amt('amount')">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                        <input type="hidden" name="s_id" value="1">
                        <input type="hidden" name="f_id" value="1">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="addrequest" name="request" placeholder=" ">
                            <label for="addrequest" class="d-inline-text">Additional Request (Optional)</label>
                            <div id="addrequest_helptext" class="form-text">
                                Such as no veggie.
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-success" type="submit" title="add to cart" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg> Update item
                            </a>
                            <button class="btn btn-outline-danger " type="submit" title="add to cart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-x" viewBox="0 0 16 16">
                                    <path
                                        d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg> Remove item
                            </button>
                        </div>
                    </form>
                </div>
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