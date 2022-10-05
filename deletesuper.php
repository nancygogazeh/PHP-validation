<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'registration');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user_form WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data is Deleted"); </script>';
        header("Location:super_admin.php");
    }
    else
    {
        echo '<script> alert("Data IS Not Deleted"); </script>';
    }
}

?>