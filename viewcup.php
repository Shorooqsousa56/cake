<?php
$db= mysqli_connect('localhost','shorooq','','cakeshop');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cakestyle.css" />
    <link rel="shortcut icon"  href="images/cupcake1.png"/>
    <title>CakeShop-itemPage</title>
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
        <a href="hostphp.php">Back</a>

        <a href="#"></a>


        <a href="#"><img onclick="document.location.href='logout.php';return false;" src="images/logout.png"></a>

    </nav>


</header>
<h1 id="v" class="space"></h1>
<h1 id="v" class="space"></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<section >

    <table border = 2 cellspacing = 2 cellpadding = 10 style="font-size: 26px;background-color:  #ffb3cc; color: deeppink;
  margin-left: auto;
  margin-right: auto;">

        <tr>

            <td style="color: white;background-color: deeppink;">id</td>
            <td style="color: white;background-color: deeppink; ">Name</td>
            <td style="color: white;background-color: deeppink">Price</td>
            <td style="color: white;background-color: deeppink">Amount</td>
            <td style="color: white;background-color: deeppink">Profit</td>
            <td style="color: white;background-color: deeppink">Image</td>

        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($db, "SELECT * FROM cupcake ORDER BY id asc ")
        ?>

        <?php foreach ($rows as $row) : ?>
            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["Price"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td><?php echo $row["profit"]; ?></td>
                <td> <img src="images/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section class="cont2">



<br>
<br>

<br>

</body>
</html>