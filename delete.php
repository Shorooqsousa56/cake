
<?php
session_start();

if( (isset($_POST['delete']) )){
    $id = (int)$_POST['id'];


    $mychoice = $_POST['mychoice'];
    echo $mychoice;
    $db= mysqli_connect('localhost','shorooq','','cakeshop');

            if($mychoice=="birthdaycake") {

                $query =  "DELETE FROM birthdaycake WHERE id = $id";
               mysqli_query($db, $query);
                echo
                "
      <script>
        alert('Successfully deleted cake');
       // document.location.href = 'data.php';
      </script>
      ";
            }
            if($mychoice=="cupcake") {
                $query =  "DELETE FROM cupcake WHERE id = $id";
               mysqli_query($db, $query);

                echo
                "
      <script>
        alert('Successfully deleted cup');
       // document.location.href = 'data.php';
      </script>
      ";
            }
            if($mychoice=="cookies") {
                $query =  "DELETE FROM cookies WHERE id = $id";
                mysqli_query($db, $query);
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



