<?php

@include 'config.php';

session_start();





if(isset($_POST['submit_log'])){
    
   $uname=$_POST['email'];
   $password=$_POST['password'];
   
   $sql = "SELECT * FROM user_form WHERE email='$uname' AND password='$password'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   var_dump($row);
   echo "<br>";
   var_dump($result);
   echo "<br>";
   echo $sql ;
   if ($row['email'] == $uname && $row['password'] == $password && $row['user_type']=='admin')  {
      

       echo "Logged in!<br>";
       $_SESSION['fname'] = $row['fname'];
       $_SESSION['id'] = $row['id'];
   
       header("location:admin_page.php"); 
       die;}?>
       
      
       
 <?php } ?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      // if(isset($error)){
      //    foreach($error as $error){
      //       echo '<span class="error-msg">'.$error.'</span>';
      //    };
      // };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit_log" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>