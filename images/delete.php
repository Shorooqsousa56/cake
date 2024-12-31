
<?php
session_start();

if( (isset($_POST['delete']) )){
    $id = $_POST['id'];
    $mychoice = $_POST['mychoice'];
    echo $mychoice;
    $db= mysqli_connect('localhost','shorooq','','cakeshop');






            if($mychoice=="birthdaycake") {
                // $query = "INSERT INTO  `birthdaycake` (`id`, `cakename`, `price`, `amount`,`image`) VALUES ('', '".$name."', '".$price."', '".$amount."', '".$newImageName."');";

               // mysqli_query($db, $query);
                echo
                "
      <script>
        alert('Successfully Added cake');
       // document.location.href = 'data.php';
      </script>
      ";
            }
            if($mychoice=="cupcake") {
                //$query = "INSERT INTO  `cupcake` (`id`, `cakename`, `price`, `amount`,`image`) VALUES ('', '".$name."', '".$price."', '".$amount."', '".$newImageName."');";

               // mysqli_query($db, $query);

                echo
                "
      <script>
        alert('Successfully Added cup');
       // document.location.href = 'data.php';
      </script>
      ";
            }
            if($mychoice=="cookies") {
                // $query = "INSERT INTO  `cookies` (`id`, `cakename`, `price`, `amount`,`image`) VALUES ('', '".$name."', '".$price."', '".$amount."', '".$newImageName."');";

               // mysqli_query($db, $query);
                echo
                "
      <script>
        alert('Successfully Added cook');
       // document.location.href = 'data.php';
      </script>
      ";
            }









}

else {
    echo "fail";
}



