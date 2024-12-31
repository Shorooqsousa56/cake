<?php
$db= mysqli_connect('localhost','shorooq','','cakeshop');
if(isset($_POST['delete'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_amount = $_POST['product_amount'];
    $product_quantity = $_POST['quantity'];

    $select_cart = mysqli_query($db, "delete FROM cart WHERE name ='$product_name'");

    $det=mysqli_query($db, "SELECT name FROM cart ");


    echo
    "
      <script>
        alert('Successfully deleted');
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

            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button  name="check" style=" width:130px;font-size: 20px;font-family: 'Times New Roman';"><a href="order.php">CheckOut</a></button>

                <?php


                $rows = mysqli_query($db, "SELECT * FROM cart ");
                if(mysqli_num_rows($rows) > 0){
                while($row = mysqli_fetch_assoc($rows)){

                ?>

                    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

                    <div class="pagep">
                        <img src="images/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
                        <p style="color: #da368c;"><?php echo $row["name"]; ?></p>
                        &nbsp;&nbsp;&nbsp;&nbsp;<p1><?php echo $row["price"]."NIS"; ?></p1>&nbsp;&nbsp;&nbsp;
                        <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                        <input type="hidden" name="product_amount" value="<?php echo $row['amount']; ?>">
                        <button name="delete">Delete</button>

                    </div>


                </form>


                    <?php
                };
                };
                ?>


        </div>

    </div>
</div>
</div>
</div>
<!--end page2-->
</body>
</html>
