<?php

@include 'config.php';



    
if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
   $mname =mysqli_real_escape_string($conn,$_POST['mname']);
   $lname =mysqli_real_escape_string($conn,$_POST['lname']);
   $famname =mysqli_real_escape_string($conn,$_POST['famname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone=$_POST['phone'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $birthday=$_POST['birthday'];
//    $user_type = $_POST['user_type'];
   
  
   


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(fname,mname,lname,famname, email,phone, password,birthday) 
         VALUES('$fname','$mname','$lname','$name','$email','$phone','$pass',birthday)";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}



function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
         .error {color: #FF0000;}
      </style>
   </head>
<body>





<?php
// define variables and set to empty values
         $fnameErr = "";
         $mnameErr = "";
         $lnameErr = "";
         $famnameErr = "";
         $emailErr="";
         $phoneErr="";
         $passwordErr="";
         $fname = $mname = $lname = $famname  = " ";
         
 //Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
   
    //String Validation  
        if (empty($_POST["fname"])) {  
             $fnameErr = "Name is required";  
        } else {  
            $fname = input_data($_POST["fname"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                    $fnameErr = "Only alphabets and white space are allowed";  
                }  
        }  



        if (empty($_POST["mname"])) {  
            $mnameErr = "middlename is required";  
       } else {  
           $mname = input_data($_POST["mname"]);  
               // check if name only contains letters and whitespace  
               if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {  
                   $mnameErr = "Only alphabets and white space are allowed";  
               }  
       }  


       if (empty($_POST["lname"])) {  
        $lnameErr = "lastename is required";  
   } else {  
       $lname = input_data($_POST["lname"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
               $lnameErr = "Only alphabets and white space are allowed";  
           }  
   }  

   if (empty($_POST["famname"])) {  
    $famnameErr = "familyname is required";  
} else {  
   $famname = input_data($_POST["famname"]);  
       // check if name only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/",$famname)) {  
           $famnameErr = "Only alphabets and white space are allowed";  
       }  
}  

          
        //password Validation   
        if (empty($_POST["password"])) {  
                $passwordErr = "Password should be 8 digits ";  
        } else {  
                $password = input_data($_POST["password"]);  
                // check that the password is well-formed  
                if (!filter_var($password, FILTER_VALIDATE_EMAIL)) {  
                    $passwordlErr = "Invalid password format, should be less than 14 digit";  
                }  
         }  


           if (empty($_POST["email"])) {  
    $emailErr = "email is required";  
} else {  
   $famname = input_data($_POST["email"]); } 


        //Number Validation  
        if (empty($_POST["phone"])) {  
                $phoneErr = "Should be 14 digits ";  
        } else {  
                $phone = input_data($_POST["phone"]);  
                // check if mobile no is well-formed  
                if (!preg_match ("/^[0-9]*$/", $phone) ) {  
                $phoneErr = "Only numeric value is allowed.";  
                }  
            // //check mobile no length should not be less and greator than 10  
            // if (strlen ($phone) != 10) {  
            //     $phoneErr = "Should be 14 digits ";  
            //     }  
        }  }
?>



<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fname" placeholder="enter your first name">

      <span style="float:left;" class="error"> <?php echo $fnameErr; ?> </span>  

      <input type="text" name="mname"   placeholder="enter your middle name">
      <span  style="float:left;" class = "error"><?php echo  $mnameErr;?></span>

      <input type="text" name="lname"  placeholder="enter your last name">
      <span  style="float:left;"class = "error"><?php echo  $lnameErr;?></span>

      <input type="text" name="famname" placeholder="enter your family name">
      <span  style="float:left;"class = "error"><?php echo  $famnameErr;?></span>


      <input type="email" name="email"  placeholder="enter your email">
      <span style="float:left;" class="error"><?php echo $emailErr; ?> </span> 

      <input type="tel" id="phone" name="phone" placeholder="enter your phone" >
      <span style="float:left;" class="error"><?php echo $phoneErr; ?> </span> 

      <input type="password" name="password"  placeholder="enter your password">
      <span class="error"> <?php echo $passwordErr; ?> </span> 
      <input type="password" name="cpassword"  placeholder="confirm your password">
      <input type="date" id="birthday" name="birthday">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>



      
</body>
</html>