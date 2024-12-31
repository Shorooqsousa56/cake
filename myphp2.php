<?php
session_start();

if (isset($_SESSION['isMember']) && isset($_SESSION['Email'])) {
if($_SESSION['isMember']==1){





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" />
    <link rel="shortcut icon"  href="images/cupcake1.png"/>
    <link rel="stylesheet" href="thirdstyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />
    <link rel="shortcut icon"  href="images/cupcake1.png"/>
    <meta https-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>


        <title>CakeShop-HomePage</title>
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
        <a href="#">Home</a>
        <a href="#t">Team</a>
        <a href="#b">Contact Us</a>
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
<div class="cover">
    <img id="cover" src="images/imgcovn.jpg" style="width:100%;height:100%;" >
     <div class="mycp glow" style="font-size: 45px; font-family: 'Brush Script MT'; top:60%">
         <h2>Cake Shop has a  <span id="words">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tasty cake.</span></h2>



     </div>
</div>

<section>
    <div>
      <h1 id="t" class="space"></h1>
    </div>
</section>
<section>
    <p style="color:pink ">h</p>
</section>
<section>
    <p style="color:pink ">h</p>
</section>
<section class="wrapper"   >

    <div class="image"  >

        <img  src="images/chef1.jpg" style="width:80%;height:100%;" >
        <div class="content">
            <h1   style="font-family: Brush Script MT;color: white; font-size: 40px;" >
               &nbsp;John Watson.
                <br>
                <p   style="font-family: 'Times New Roman'; font-size: 30px; padding-top: 15%;">He is responsible for the cream,<br>
                    He was also given a certificate of experience in baking.</p>
            </h1>
        </div>
        </div>
    <div class="image">
        <img class="column" src="images/chef2.jpg" style="width:100%;height:100%;" >
        <div class="content2">
            <h1 style="font-family: Brush Script MT;color: white; font-size: 40px;" >
                &nbsp;Antonio Bachour.
                <br>
                <p style="font-family: 'Times New Roman'; font-size: 30px; padding-top: 15%;">He is in charge of the dough ,<br>
                    he won the 2012 Zest Award for Baking & Pastry.</p>
            </h1>
        </div>
    </div>



</section>

<section>
    <img  src="images/3606.jpg" style="width:100%;height:100%; " >
</section>
<section>
    <p style="color:pink ">h</p>
</section>
<section>
    <p style="color:pink ">h</p>
</section>

<section>


    <h1  class="caketh" id="b" style="color: white; text-align: center" >CakeShop</h1>
    <div style="align-content: center" class="social">
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="f" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f "></i></a>
    <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube "></i></a>
    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter "></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram "></i></a>
    </div>
    <p style=" color:white; font-family: 'Times New Roman' ;font-size: 25px; text-align: center"  >
        <br>
        <img  src="images/telephone.png"  > 059-239038 &nbsp;
         <img  src="images/clock.png"  >  Sun-Fri 8:00 AM to 9:00 PM &nbsp;

         <img  src="images/email2.png"  > Cake-shop@hotmail.com

    </p>
</section>



<script type="text/javascript">
    (function () {
        var words = ["&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tasty cake."," &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Good looking."," &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Good price."," &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delicious cake." ],
            i = 0;
        setInterval(function(){ $('#words').fadeOut(function(){
            $(this).html(words[(i = (i + 1) % words.length)]).fadeIn();
        }); }, 2000)
    })();
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

</body>
</html>

<?php

}
else {

    header("Location: myphp.php");
    exit();
}

}else{

    header("Location: myphp.php");
    exit();

}

?>