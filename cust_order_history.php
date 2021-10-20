<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <title>Order History | EATERIO</title>
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
        <a class="nav nav-item text-decoration-none text-muted mb-3" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <div class="mb-3 text-wrap" id="shop-header">
            <h2 class="display-6 strong fw-normal">Order History</h2>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active px-4" id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#nav-ongoing"
                    type="button" role="tab" aria-controls="nav-ongoing"
                    aria-selected="true">&nbsp;Ongoing&nbsp;</button>
                <button class="nav-link px-4" id="completed-tab" data-bs-toggle="tab" data-bs-target="#nav-completed"
                    type="button" role="tab" aria-controls="nav-completed" aria-selected="false">Completed</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <!-- ONGOING ORDER TAB -->
            <div class="tab-pane fade show active p-3" id="nav-ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
                <div class="row row-cols-1 row-cols-md-3">
                    <!-- START EACH ORDER DETAIL -->
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header bg-warning justify-content-between">
                                <small class="me-auto d-flex" style="font-weight: 500;">Preparing your order</small>
                            </div>
                            <div class="card-body">
                                <div class="card-text row row-cols-1 small">
                                    <div class="col">Order #2021102105000001</div>
                                    <div class="col">From The Noodle Shop</div>
                                    <div class="col mb-2"><strong>1x</strong> Pork Boat Noodle</div>
                                    <div class="col pt-2 border-top">Total 1 item</div>
                                    <div class="col mb-2">Grand Total<strong class="ms-3">50 THB</strong></div>
                                    <div class="col text-end">
                                        <a href="cust_order_detail.php?o_id=1" class="text-dark text-decoration-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-square"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                            </svg> More Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EACH ORDER DETAIL -->
                </div>

                <!-- IN CASE NO ORDER -->
                <div class="row row-cols-1">
                    <div class="col py-2 px-3 bg-danger text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg><span class="ms-2">You don't have any order yet.</span></div>
                </div>
                <!-- END CASE NO ORDER -->
            </div>


            <!-- COMPLETED ORDER TAB -->
            <div class="tab-pane fade p-3" id="nav-completed" role="tabpanel" aria-labelledby="completed-tab">
                <div class="row row-cols-1 row-cols-md-3">
                    <!-- START EACH ORDER DETAIL -->
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header bg-success text-white justify-content-between">
                                <small class="me-auto d-flex" style="font-weight: 500;">Completed</small>
                            </div>
                            <div class="card-body">
                                <div class="card-text row row-cols-1 small">
                                    <div class="col">Order #2021102105000001</div>
                                    <div class="col">From The Noodle Shop</div>
                                    <div class="col mb-2"><strong>1x</strong> Pork Boat Noodle</div>
                                    <div class="col pt-2 border-top">Total 1 item</div>
                                    <div class="col mb-2">Grand Total<strong class="ms-3">50 THB</strong></div>
                                    <div class="col text-end">
                                        <a href="cust_order_detail.php?o_id=1" class="text-dark text-decoration-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-square"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                            </svg> More Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EACH ORDER DETAIL -->
                </div>

                <!-- IN CASE NO ORDER -->
                <div class="row row-cols-1">
                    <div class="col py-2 px-3 bg-danger text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg><span class="ms-2">You don't have any order yet.</span></div>
                </div>
                <!-- END CASE NO ORDER -->

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