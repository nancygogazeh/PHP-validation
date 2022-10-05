<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'registration');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $fname =$_POST['fname'];
        $mname =$_POST['mname'];
       
        $famname =$_POST['famname'];
        $phone=$_POST['phone'];
        $birthday=$_POST['birthday'];
        $email = $_POST['email'];
        $pass =($_POST['password']);
        $type =($_POST['type']);
        $salary =($_POST['salary']);

        $query ="UPDATE user_form SET fname='$fname',mname='$mname',
        famname='$famname',email='$email',phone='$phone',
        birthday='$birthday',password='$pass',salary='$salary' WHERE id='$id'";

        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Is Updated"); </script>';
            header("Location: admin_page.php");
        }
        else
        {
            echo '<script> alert("Data Is Not Updated"); </script>';
        }
    }
?>


