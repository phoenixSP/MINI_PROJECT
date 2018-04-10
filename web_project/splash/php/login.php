<?php
   include("config.php");
   session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $regno = mysqli_real_escape_string($db,$_POST['regno']);
      $pass = mysqli_real_escape_string($db,$_POST['pass']); 
      $sql = "SELECT * FROM user WHERE regNo = '$regno' and pass = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         //echo "successfully logged in";
         $_SESSION['regno'] = $regno;
         header("location:../BS3/dashboard.html");
      }
      else {
         $error = "Your Login Name or Password is invalid";
         echo "error";

      }
   }
?>