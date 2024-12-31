
<?php
session_start();

if( (isset($_POST['viewitem']) )){

    $mychoice = $_POST['myvchoice'];

    $db= mysqli_connect('localhost','shorooq','','cakeshop');

    if($mychoice=="birthdaycake") {


        echo
        "
      <script>
       
       document.location.href = 'viewcake.php';
      </script>
      ";
    }
    if($mychoice=="cupcake") {


        echo
        "
      <script>
       
       document.location.href = 'viewcup.php';
      </script>
      ";
    }
    if($mychoice=="cookies") {

        echo
        "
      <script>
       
       document.location.href = 'viewcook.php';
      </script>
      ";
    }









}

else {
    echo "fail";
}



