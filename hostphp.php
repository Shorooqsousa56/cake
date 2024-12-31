<?php
session_start();
$db= mysqli_connect('localhost','shorooq','','cakeshop');
if (isset($_SESSION['isMember']) && isset($_SESSION['Email'])) {
    if($_SESSION['isMember']==1){





        ?>
        <!DOCTYPE html>
        <html xmlns="http://www.w3.org/1999/html">
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
            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
            <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
            <meta https-equiv="X-UA-Compatible" content="ie=edge" />
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


            <title>CakeShop-HostPage</title>
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
                <a href="#n">New</a>
                <a href="#d">Delete</a>
                <a href="#u">Update</a>
                <a href="#v">View</a>
                <a href="#b">Us</a>
                <a href="#"></a>

                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"><img src="images/user%20(1).png"></a>


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
                <h1 id="n" class="space"></h1>
            </div>
        </section>

        <section class="wrapper"   >
         <p >
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

            <div class="cont2" style="align-items: center; width: 40%;height: 50%">

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                <form action="add.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <select id="mychoice" name="mychoice" class ="select"  style="width: 23%;background-color: pink;color: deeppink"  >
                    <option  selected >Type</option>
                    <?php
                    $cake=array("birthdaycake","cupcake","cookies");
                        foreach ($cake as $cakes){

                    ?>
                                <option> <?php  echo $cakes  ?> </option> <?php  }?>
                </select>
                   <script var mychoice = document.querySelector('#dnd');></script>

                <br>
                <br>
                <br>
                <br>

                <div >
                    <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Name:</label> &nbsp;&nbsp; &nbsp;&nbsp;
                    <input id="name" name="name" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" required>
                </div>
                <br>
                <br>

                <div >
                    <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Price:</label> &nbsp; &nbsp; &nbsp;&nbsp;
                    <input id="price" name="price" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" required>
                </div>
                <br>
                <br>

                <div >
                    <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Amount:</label> &nbsp;
                    <input id="amount" name="amount" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" required>


                </div>
                    <br>
                    <br>
                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Profit:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="profit" name="profit" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;"  type="text" required>


                    </div>
                <br>
                <br>
                <input type="file"  name="myfile" style="font-size: 15px; color: deeppink;" accept=".jpg, .jpeg, .png" value="" >
                <div>
                    <br>
                    <br>
                    &nbsp;&nbsp; &nbsp;   <button class="btnadd" name="add"  type="submit" class="addbtn">
                        AddItem

                    </button>
                </div>
                </form>


            </div>


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
</p>


        </section>

        <section >
            <img  src="images/cov3.jpg" style="width:100%;height:100%; " >


        </section>
        <section>
            <div>
                <h1 id="d" class="space"></h1>
            </div>
        </section>

        <section class="wrapper" id="d" >

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="cont2" style="align-items: center; height:40%; width: 50%;">

                <form action="delete.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <select id="mychoice" name="mychoice" class ="select"  style="width: 26%;background-color: pink;color: deeppink"  >
                        <option  selected >Type</option>
                        <?php
                        $cake=array("birthdaycake","cupcake","cookies");
                        foreach ($cake as $cakes){

                            ?>
                            <option> <?php  echo $cakes  ?> </option> <?php  }?>
                    </select>
                    <script var mychoice = document.querySelector('#dnd');></script>

                    <br>
                    <br>

                    <br>
                    <br>

                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">ID:</label> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="id" name="id" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" required>
                    </div>
                    <br>
                    <br>
                    <div>
                        <br>
                        <br>
                        &nbsp;&nbsp; &nbsp;   <button class="btnadd" name="delete"  type="submit" class="addbtn">
                            DeleteItem

                        </button>
                    </div>
                </form>

            </div>
        </section>
        <section>
        <img  src="images/cov3.jpg" style="width:100%;height:100%; ">
        </section>

        <section>
            <div>
                <h1 id="u" class="space"></h1>
            </div>
        </section>
        <section class="wrapper" id="u"  >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="cont2" style="align-items: center; height:70%; width: 60%; top:-70px;">

                <form action="update.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    &nbsp;&nbsp;
                    <select id="mychoice" name="mychoice" class ="select"  style="width: 26%;background-color: pink;color: deeppink"  >
                        <option  selected >Type</option>
                        <?php
                        $cake=array("birthdaycake","cupcake","cookies");
                        foreach ($cake as $cakes){

                            ?>
                            <option> <?php  echo $cakes  ?> </option> <?php  }?>
                    </select>
                    <script var mychoice = document.querySelector('#dnd');></script>

                     <div >
                         <br>
                         <br>
                         &nbsp;&nbsp;
                         <label for="#c1" style="color: white;font-family:Brush Script MT;font-size: 23px;">ItemName</label>
                         <input  id="c1" name="c1" type="checkbox" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <label for="#c2" style="color: white;font-family:Brush Script MT;font-size: 23px;">Price</label>
                         <input  id="c2" name="c2" type="checkbox" >
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <label for="#c3"  style="color: white;font-family:Brush Script MT;font-size: 23px;">Amount</label>
                         <input  id="c3" name="c3" type="checkbox" >
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <label for="#c5" style="color: white;font-family:Brush Script MT;font-size: 23px;">Profit</label>
                         <input  id="c5" name="c5" type="checkbox" >
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <label for="#c4" style="color: white;font-family:Brush Script MT;font-size: 23px;">Image</label>
                         <input  id="c4" name="c4" type="checkbox" >

                     </div>


                    <br>
                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">ID:</label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="uid" name="uid" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" required>
                    </div>
                    <br>
                    <br>

                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Name:</label> &nbsp;&nbsp; &nbsp;&nbsp;
                        <input id="uname" name="name" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text" >
                    </div>

                    <br>
                    <br>
                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Price:</label> &nbsp; &nbsp; &nbsp;&nbsp;
                        <input id="uprice" name="price" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text">
                    </div>
                    <br>
                    <br>

                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Amount:</label> &nbsp;
                        <input id="uamount" name="amount" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;" name="un" type="text">


                    </div>

                    <br>
                    <br>
                    <div >
                        <label  style="color: deeppink;font-size:25px; font-family:Brush Script MT;">Profit:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="profit" name="profit" style="color:deeppink; background-color: pink;font-family:Calibri;border-style: ridge;font-size: 25px;"  type="text" >


                    </div>
                    <br>
                    <br>
                    <input type="file"  name="myufile" style="font-size: 15px; color: deeppink;" accept=".jpg, .jpeg, .png" value="" >
                    <div>
                        <br>
                        <br>
                        &nbsp;&nbsp; &nbsp;   <button class="btnadd" name="update"  type="submit" class="addbtn" style="width: 100%;">
                            UpdateItem

                        </button>
                    </div>
                </form>

            </div>
        </section>


        <section>
            <img  src="images/cov3.jpg" style="width:100%;height:100%; ">
        </section>




                <h1 id="v" class="space"></h1>


        <section class="wrapper"  style="top: 435%"  >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="cont3" >

                <form action="viewitem.php" method="post" autocomplete="off" enctype="multipart/form-data">

                    <select id="myvchoice" name="myvchoice" class ="select"  style="background-color: pink;color: deeppink"  >
                        <option  selected >Type</option>
                        <?php
                        $cake=array("birthdaycake","cupcake","cookies");
                        foreach ($cake as $cakes){

                            ?>
                            <option> <?php  echo $cakes  ?> </option> <?php  }?>
                    </select>
                    <script var mychoice = document.querySelector('#dnd');></script>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <button class="btnadd" name="viewitem"  type="submit" class="addbtn" style="width: 100px; font-size: 15px">
                            ViewItem

                        </button>
                    </div>

                </form>


            </div>

        </section>

        <section class="wrapper"  style="top: 460%"  >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="cont3" >

                <form action="viewuser.php" method="post" autocomplete="off" enctype="multipart/form-data">



                    <button class="btnadd" name="viewuser"  type="submit" class="addbtn" style="width: 260px; font-size: 15px; ">
                        ViewUsers

                    </button>
            </div>

            </form>


            </div>

        </section>







        <section>
            <img  src="images/cov3.jpg" style="width:100%;height:100%; ">
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


}

        else{

    header("Location: myphp.php");
    exit();

}

?>