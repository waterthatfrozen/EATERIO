<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("conn_db.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,600&display=swap" rel="stylesheet">    <title>Eaterio</title>
    <title>EATERIO</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1 style="font-weight: 600;">Hello, World!</h1>
    <h2>This is EATERIO project</h2>
    <p>
        <strong>Members</strong><br/>
        <ul>
            <li>6222780379 Paphana Yiwsiw</li>
            <li>6222780668 Sirada Chaisawat</li>
            <li>6222780569 Thanakit Lerttomolsakul</li>
        </ul>
        <br/>
        Soon to come!
    </p>
    <?php
        session_start();
        if(isset($_SESSION['username'])){
            echo "LOGGED IN! Welcome, {$_SESSION['username']}<br/>";
            echo "<a href='logout.php'>Logout</a>";
        }else{
            echo "You didn't login yet!<br/>";
            echo "<a href='cust_login.php'>Customer Login</a><br/>";
            echo "<a href='shop/shop_login.php'>Shop Login</a>";
        }
    ?>
</body>
</html>