
<?php
session_start();

 if( (isset($_POST['add']) )){
     $name = $_POST['name'];
     $price = $_POST['price'];
     $amount = $_POST['amount'];
     $profit = $_POST['profit'];
     $mychoice = $_POST['mychoice'];
     echo $mychoice;
     $db= mysqli_connect('localhost','shorooq','','cakeshop');
     if($_FILES["myfile"]["error"] == 4){
         echo
         "<script> alert('Image Does Not Exist'); </script>"
         ;
     }
     else{
         $fileName = $_FILES["myfile"]["name"];
         $fileSize = $_FILES["myfile"]["size"];
         $tmpName = $_FILES["myfile"]["tmp_name"];

         $validImageExtension = ['jpg', 'jpeg', 'png'];
         $imageExtension = explode('.', $fileName);
         $imageExtension = strtolower(end($imageExtension));
         if ( !in_array($imageExtension, $validImageExtension) ){
             echo
             "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
         }

         else{

             $newImageName = uniqid();
             $newImageName .= '.' . $imageExtension;

             move_uploaded_file($tmpName, 'images/' . $newImageName);
             if($mychoice=="birthdaycake") {
                // $query = "INSERT INTO  `birthdaycake` (`id`, `cakename`, `price`, `amount`,`image`) VALUES ('', '".$name."', '".$price."', '".$amount."', '".$newImageName."');";
                 $query = "INSERT INTO birthdaycake VALUES('', '$name','$price','$amount','$profit','$newImageName')";
                 mysqli_query($db, $query);
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
                $query = "INSERT INTO cupcake VALUES('', '$name','$price','$amount','$profit','$newImageName')";
                 mysqli_query($db, $query);

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
                 $query = "INSERT INTO cookies VALUES('', '$name','$price','$amount','$profit','$newImageName')";
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
     }




  }

  else {
    echo "fail";
}



