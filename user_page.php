<?php

@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
      <h2>HELLO,  <span>USER</span></h2>
      <h1> Welcome <span></span></h1>
      <p> THIS IS AN USER PAGE </p>
      <a href ="login_form.php" class="btn" >LOGIN</a>
      <a href ="register_form.php" class="btn" >REGISTER</a>
      <a href ="logout.php" class="btn" >LOGOUT</a>
    </div>
</div>

    </body>
</html>

       
      <!-- $v="SELECT`fname` FROM `user_form` WHERE user_type='user'";
      if ($result = $conn->query($sql)){

  
        while ($row= $result ->fetch_assoc())
      echo $row[$v] ;} -->

    
      