
<?php
session_start();

if( (isset($_POST['update']) )){
    $id = (int)$_POST['uid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $profit = $_POST['profit'];
    $mychoice = $_POST['mychoice'];

    $db= mysqli_connect('localhost','shorooq','','cakeshop');
//1
    if (isset($_POST['c1'])) {


        if ($mychoice == "birthdaycake") {

           $query= "UPDATE `birthdaycake` SET  `cakename`= '".$name."' 
                    WHERE id = $id";
             mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cupcake") {
            $query= "UPDATE `cupcake` SET  `Name`= '".$name."' 
                    WHERE id = $id";
              mysqli_query($db, $query);

            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cookies") {
            $query= "UPDATE `cookies` SET  `Name`= '".$name."' 
                    WHERE id = $id";
             mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }

    }
//2
    if (isset($_POST['c2'])) {


        if ($mychoice == "birthdaycake") {

            $query= "UPDATE `birthdaycake` SET  `price`= '".$price."' 
                    WHERE id = $id";
            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cupcake") {
            $query= "UPDATE `cupcake` SET  `Price`= '".$price."' 
                    WHERE id = $id";
              mysqli_query($db, $query);

            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cookies") {
            $query= "UPDATE `cookies` SET  `Price`= '".$price."' 
                    WHERE id = $id";
             mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }

    }

    //3

    if (isset($_POST['c3'])) {


        if ($mychoice == "birthdaycake") {

            $query= "UPDATE `birthdaycake` SET  `amount`= '".$amount."' 
                    WHERE id = $id";
            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cupcake") {
            $query= "UPDATE `cupcake` SET   `amount`= '".$amount."' 
                    WHERE id = $id";
            mysqli_query($db, $query);

            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cookies") {
            $query= "UPDATE `cookies` SET  `amount`= '".$amount."' 
                    WHERE id = $id";
            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }

    }


    //4

    if (isset($_POST['c4'])) {
        if ($_FILES["myufile"]["error"] == 4) {
            echo
            "<script> alert('Image Does Not Exist');
           document.location.href = 'hostphp.php';
           </script>";
        }


        else {
            $fileName = $_FILES["myufile"]["name"];
            $fileSize = $_FILES["myufile"]["size"];
            $tmpName = $_FILES["myufile"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "
      <script>
        alert('No Image');
        document.location.href = 'hostphp.php';
      </script>
      ";
            } else {

                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'images/' . $newImageName);
                if ($mychoice == "birthdaycake") {

                    $query= "UPDATE `birthdaycake` SET  `image`= '".$newImageName."' 
                    WHERE id = $id";
                    mysqli_query($db, $query);
                    echo
                    "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
                }
                if ($mychoice == "cupcake") {
                    $query= "UPDATE `cupcake` SET  `image`= '".$newImageName."' 
                    WHERE id = $id";
                    mysqli_query($db, $query);

                    echo
                    "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
                }
                if ($mychoice == "cookies") {
                    $query= "UPDATE `cookies` SET  `image`= '".$newImageName."' 
                    WHERE id = $id";
                    mysqli_query($db, $query);
                    echo
                    "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
                }


            }
        }





    }

    //5
    if (isset($_POST['c5'])) {


        if ($mychoice == "birthdaycake") {

            $query= "UPDATE `birthdaycake` SET  `profit`= '".$profit."' 
                    WHERE id = $id";
            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cupcake") {
            $query= "UPDATE `cupcake` SET   `profit`= '".$profit."'  
                    WHERE id = $id";
            mysqli_query($db, $query);

            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }
        if ($mychoice == "cookies") {
            $query= "UPDATE `cookies` SET  `profit`= '".$profit."' 
                    WHERE id = $id";
            mysqli_query($db, $query);
            echo
            "
      <script>
        alert('Successfully updated ');
        document.location.href = 'hostphp.php';
      </script>
      ";
        }

    }





}

else {
    echo "fail";
}



