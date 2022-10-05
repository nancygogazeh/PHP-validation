<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'registration');

    if(isset($_POST['updatedata']))
    {   
       $id = $_POST['update_id'];
        $fname =$_POST['fname'];
       
        $famname =$_POST['famname'];
        $email = $_POST['email'];
        $phone=$_POST['phone'];
        $pass =$_POST['password'];
        $birthday=$_POST['birthday'];

        $type =$_POST['type'];
        $salary=$_POST['salary'];
    ;

        $query ="UPDATE user_form SET fname='$fname',
       famname='$famname',email='$email',phone='$phone',
        password='$pass',birthday='$birthday', user_type='$type', salary='$salary' WHERE id='$id'";

        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Is Updated"); </script>';
            header("Location:super_admin.php");
        }
        else
        {
            echo '<script> alert("Data Is Not Updated"); </script>';
        }
    }
?>


