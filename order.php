<?php
session_start();

$db= mysqli_connect('localhost','shorooq','','cakeshop');
if(isset($_POST['order'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];



    $price_total = 0;

    $cart_query = mysqli_query($db, "SELECT * FROM cart");

    if(mysqli_num_rows($cart_query) > 0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
            $product_price = number_format($product_item['price'] * $product_item['quantity']);
            $price_total += $product_price;
        };
    };

    echo $price_total;



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css" />
    <title>CakeShope-order</title>
    <link rel="shortcut icon"  href="images/cupcake1.png"/>

</head>
<body>
<header style="background-color: rgb(255, 128, 179)">

    <div>
        <h1  class="caketh" id="a" style="color: white; text-align: left" >CakeShop</h1>
    </div>

    <nav class="navi" >
        <a href="myphp2.php">Home</a>






        <a href="#"><img onclick="document.location.href='logout.php';return false;" src="images/logout.png"></a>

    </nav>






</header>

<div class="container">
    <div class="form-box">
        <h1> Order now</h1>
        <form action="" method="post">
            <div class="input-group">
                <div class="input-field">
                    <label style="color: white" class="fa-solid fa-user"> Name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>

                <div class="input-field">
                    <label style="color: white"class="fa-solid fa-user"> #phone</label>
                    <input type="text" name="phone" placeholder="Enter your number" required>
                </div>

                <div class="input-field">
                    <label style="color: white"class="fa-solid fa-user"> Address</label>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>

                <hr class="hr1">
                <div class="btn-field"> <button name="order" class="disable">Conform</button></div>

        </form>
    </div>
</div>
</body>
</html>


