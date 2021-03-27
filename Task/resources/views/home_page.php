<?php
    session_start();
    require_once('../views/header.php');
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <center>
    <h1>Hello <?php echo $_COOKIE["flag"] ;?> </h1>
        <h1>Welcome to our shop</h1>

        <a href="Buy_Product.php">Buy Product</a>
        <br/>
        <a href="Make_Payment.php">Make Payment</a>
        <br/>
        
        <a href="logout.php">logout</a><br>
        <?php require 'footer.php';?>
    </center>
</body>
</html>