
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'registration');

if(isset($_POST['insertdata']))
{
   
    $name =$_POST['fname'];
    $famname =$_POST['famname'];
    $phone=$_POST['phone'];
    $birthday=$_POST['birthday'];
    $email = $_POST['email'];
    $pass =$_POST['password'];
    $type =$_POST['type'];
    $salary=$_POST['salary'];

    $query = "INSERT INTO `user_form`(`fname`, 
    `famname`, `email`, `phone`, `password`, 
    `birthday`, `user_type`, `salary`) VALUES ('$name','$famname',
    '$email','$phone','$pass','$birthday','$type','$salary')";
     $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: super_admin.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
