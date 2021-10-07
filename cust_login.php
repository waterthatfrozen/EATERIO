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
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1>CUSTOMER LOGIN</h1>
    <div id="login-box">
        <form method="POST" action="check_login.php">
            <label>Username</label>
            <input type="text" name="username" placeholder="username">
            <br/>
            <br/>
            <label>Password</label>
            <input type="password" name="pwd" placeholder="password">
            <br/>
            <br/>
            <input type="submit" name="submit" value="Log In">
        </form>
    </div>
</body>
</html>