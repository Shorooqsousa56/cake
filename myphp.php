<?php

session_start();

if(isset($_POST['passlogin'])&& isset($_POST['emaillogin'])){
    $euser = $_POST['emaillogin'];
    $puser = $_POST['passlogin'];

    if($euser == "shorooqsousa@hotmail.com" || $euser == "ayakanaan@hotmail.com") {
        try {
            $db = mysqli_connect('localhost', 'shorooq', '', 'cakeshop');
            $sql = "SELECT * FROM admins";


            $result2 = $db->query($sql);

            for ($i = 0; $i < $result2->num_rows; $i++) {
                $row = $result2->fetch_object();
                if ($row->Email == $euser && $row->Password == $puser) {
                    $_SESSION['Email'] = $euser;
                    $_SESSION['Username'] = $row->Username;
                    $_SESSION['isMember'] = 1;

                    header("Location:hostphp.php");

                }

            }


            $db->close();

        } catch (Exception $e) {

        }


    }

    else {
        try {
            $db = mysqli_connect('localhost', 'shorooq', '', 'cakeshop');
            $sql = "SELECT * FROM members ";


            $result = $db->query($sql);

            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                if ($row->Email == $euser && $row->Password == $puser) {
                    $_SESSION['Email'] = $euser;
                    $_SESSION['Username'] = $row->Username;
                    $_SESSION['isMember'] = 1;


                        header("Location:myphp2.php");


                }

            }


            $db->close();

        } catch (Exception $e) {

        }
    }



}
 if(isset($_POST['rp'])&& isset($_POST['re'])&&isset($_POST['un'])){
    $usern = $_POST['un'];
    $userp = $_POST['rp'];
    $usere = $_POST['re'];

    try{
        $db2= mysqli_connect('localhost','shorooq','','cakeshop');
        $sql2 = "INSERT INTO  `members` (`id`, `Username`, `Email`, `Password`) VALUES ('', '".$usern."', '".$usere."', '".$userp."');";


        $result2 = $db2->query($sql2);
        $db2->commit();
        $db2->close();
        if($result2==1){
            header('Location:myphp.php');
        }
        else{
            echo 'user is used';
        }

    }catch(Exception $e){

    }


}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="secstyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon"  href="images/cupcake1.png"/>
    <title>CakeShop-LogIn</title>
</head>
<body>

<nav class="navi">
    <h1  class="cake3" > </h1>

    <a href="http://localhost/webProg/cakeweb/cake.html" target="_self" >Home</a>

</nav>



<center>

    <div style="right: 150px ; top:155px"  class="wrapper">

        <div class="box-login LogIn glow">
            <h2 >LogIn</h2>
            <form action="myphp.php" method="post">
                <div class="inputbox">
            <span class="icon">
<img  src="images/email.png" >
            </span>
                    <input  name="emaillogin" type="email" required >
                    <label style="color: white">Email</label>
                </div>
                <div class="inputbox">
            <span class="icon">
               <img  src="images/padlock.png" >
            </span>
                    <input name="passlogin" type="password" required>
                    <label  style="color: white">Password</label>
                </div>
                <div class="rem-for">
                    <label><input type="checkbox">
                        Remeber me?</label>
                    <a href="#">Forgot Password?</a>


                </div>
                <button name="login"  type="submit" class="btn">
                    LogIn

                </button>
                <div class="login-reg">
                    <p>Don't have an account?<a href="#" class="reg-link">Register</a></p>
                </div>

            </form>

        </div>


        <div class="box-login register glow">
            <h2 >Registration</h2>
            <form action="myphp.php" method="post">
                <div class="inputbox">
            <span class="icon">
        <img  src="images/user%20(1).png" >
            </span>
                    <input name="un" type="text" required>
                    <label  style="color: white">Username</label>
                </div>
                <div class="inputbox">
            <span class="icon">
        <img  src="images/email.png" >
            </span>
                    <input name="re" type="email" required>
                    <label  style="color: white">Email</label>
                </div>
                <div class="inputbox">
            <span class="icon">
               <img  src="images/padlock.png" >
            </span>
                    <input name="rp" type="password" required>
                    <label  style="color: white">Password</label>
                </div>
                <div class="rem-for">
                    <label><input type="checkbox">
                        I Agree to the terms & conditions</label>


                </div>
                <button type="submit" class="btn">
                    Register

                </button>
                <div class="login-reg">
                    <p>Already have an account?<a href="#" class="login-link">LogIn</a></p>
                </div>

            </form>

        </div>




    </div>

</center>
<script src="firstscript.js"></script>

<h1  class="cake2" ></h1>
<h1  class="cake2" ></h1>
<h1  class="cake2" ></h1>
<h1  class="cake2" ></h1>

<h1  class="cake2" ></h1>




</body>
</html>
