<?php
$db= mysqli_connect('localhost','shorooq','','cakeshop');

if(isset($_POST['add'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_amount = $_POST['product_amount'];
    $product_profit=$_POST['product_profit'];
    $product_quantity = $_POST['quantity'];;



    $select_cart = mysqli_query($db, "SELECT * FROM birthdaycake WHERE cakename ='$product_name'");

       $det=mysqli_query($db, "SELECT name FROM cart ");



            $query = "INSERT INTO cart VALUES( '$product_name','$product_price','$product_image ','$product_amount','$product_profit','$product_quantity')";

            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully Added');
       // document.location.href = 'data.php';
      </script>
      ";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="images/cupcake1.png"/>
    <title>CakeShop-cupcake</title>
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="thirdstyle.css" />
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        var i = 1;
        var x = setInterval(function() {
            var x = document.getElementById("a");

            console.log(x.style.color);
            if (x.style.color == "white"){
                x.style.color = "deeppink";

            }
            else if (x.style.color == "deeppink"){
                x.style.color = "white";

            }



        }, 1000);

    </script>

</head>
<body>


<header style="background-color: rgb(255, 128, 179)">

    <div>
        <h1  class="caketh" id="a" style="color: white; text-align: left" >CakeShop</h1>
    </div>

    <nav class="navi" >
        <a href="myphp2.php" style="font-size: 22px;font-family: 'Times New Roman'">Home</a>
        <a href="#"></a>
        <select class ="select"onchange="location = this.value;" name="format" id="format">
            <option selected disabled>Categories</option>
            <option value="birthdaycake.php">BirthdayCake</option>
            <option value="cookies.php">Cookies</option>
            <option value="cupcake.php">CupCake</option>
        </select>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <!--  <a href="#"><img src="images/user%20(1).png"></a> -->

        <a href="cartshop.php"><img src="images/shopping-cart24.png"></a>
        <a href="#"><img src="images/heartnew.png"></a>
        <a href="#"><img onclick="document.location.href='logout.php';return false;" src="images/logout.png"></a>

    </nav>






</header>


<!--start navbar-top-->

<!--end navbar-->


<!--start page2.per-->

<div class="page2p">

    <div class="page2p_container">
        <h3 id="v" class="space"></h3>
        <h3 id="v" class="space"></h3>




        <div class="page2p_content">
                <?php

                $rows = mysqli_query($db, "SELECT * FROM birthdaycake ORDER BY id asc");
                if(mysqli_num_rows($rows) > 0){
                while($row = mysqli_fetch_assoc($rows)){

                ?>

            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

                    <div class="pagep">
                        <img src="images/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
                        <p ><?php echo $row["cakename"]; ?></p>
                        <p1><?php echo $row["price"]."NIS"; ?></p1>&nbsp;
                        <input style="background-color:palevioletred; color: white; width:30px;" type="text" name="quantity"  >
                        <input type="hidden" name="product_name" value="<?php echo $row['cakename']; ?>">
                        <input type="hidden" name="product_profit" value="<?php echo $row['profit']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                        <input type="hidden" name="product_amount" value="<?php echo $row['amount']; ?>">
                        <button name="add">add to cart</button>

                    </div>





            </form>
                    <?php
                };
                };
                ?>


        </div>

    </div>
</div>


<!--end page2-->
</body>
</html>
