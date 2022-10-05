<?php
session_start();
@include 'config.php';
@include 'dashboard.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                        <label> First Name </label>
                            <input type="text"  name="fname"  id="fname"class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label> Family Name </label>
                            <input type="text" name="famname" id="famname" class="form-control" placeholder="Enter Family Name">
                        </div>

                        <div class="form-group">
                            <label>Phone </label>
                            <input  type="tel" name="phone" id="phone"class="form-control" placeholder="Enter number Phone">
                        </div>

                        <div class="form-group">
                            <label>Birthday </label>
                            <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Enter birthday">
                        </div>
                        <div class="form-group">
                            <label>email </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                           <input type="text" name="password" id="password" class="form-control"  placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                           <input type="text" name="Salary" id="salary" class="form-control"  placeholder="Enter salary">
                        </div>
                        <div class="form-group">
                            <label>Type user</label>
                            <input type="text" name="type" id="user_type" class="form-control"  placeholder="Enter type user">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Adminm , Users Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatesuper.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text"  name="fname"  id="fname"class="form-control" placeholder="Enter First Name">
                        </div>


                        <div class="form-group">
                            <label>family Name </label>
                            <input type="text" name="famname" id="fname" class="form-control" placeholder="Enter Family Name">
                        </div>

                        <div class="form-group">
                            <label>Phone </label>
                            <input  type="tel" name="phone" id="phone"class="form-control" placeholder="Enter number Phone">
                        </div>

                        <div class="form-group">
                            <label>Birthday </label>
                            <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Enter birthday">
                        </div>

                        <div class="form-group">
                            <label>email </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="text" name="password" id="password" class="form-control"  placeholder="Enter password">
                        </div>

                        <div class="form-group">
                           <label>Type_User</label>
                           <input type="text" name="type" id="type" class="form-control"  placeholder="Enter user type">
                        </div>
                        <div class="form-group">
                           <label>Salary</label>
                           <input type="text" name="salary" id="salary" class="form-control"  placeholder="Enter salary">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update user's Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete User's Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletesuper.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>  Delete this record ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger">Delete it </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



   

<div class="container">
   <div class="row">
      <div >
         <?php
            if (isset($_SESSION['message'])) :  
         ?>
         <h5 class="alert alert-sucess"><?= $_SESSION['message'];?></h5>
         <?php
            unset($_SESSION['message']);
            endif;
         ?>
         <div class="card">
            <div class="card-header">
               <div class="content mt-5 mb-5">
                  <h3 >HELLO, <span style="background: orangered; color:#fff;border-radius :5px;
                   padding:0 15px;">SUPER_ADMIN</span></h3>
                  <h1 style=" font-size: 50px;">WELCOME<span></span></h1>
                  <p Style=" font-size: 25px;">THIS IS AN Super ADMIN PAGE</p>
                  <a href="login_form.php" class="btn" style="background: #333;color :white;">login</a>
                  <a href="register_form.php" class="btn" style="background: #333;color :white;">register</a>
                  <a href="logout.php" class="btn"style="background: red;color :white;">logout</a>
               </div>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                    </button>

               
               <?php
                     $connection = mysqli_connect("localhost","root","");
                     $db = mysqli_select_db($connection, 'registration');

                     $query = "SELECT * FROM user_form";

                     $query_run = mysqli_query($connection, $query);

                  ?>

               <table id="datatableid" class="table table-bordered table-light">
                  <thead>
                     <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Family Name </th>
                        <th scope="col"> Phone </th>
                        <th scope="col"> Birthday </th>
                        <th scope="col">E-mail </th>
                        <th scope="col">Password</th>
                        <th scope="col">user_type</th>
                        <th scope="col">salary</th>
                        <th scope="col"> EDIT </th>
                        <th scope="col"> DELETE </th>
                     </tr>
                  </thead>
                  <?php
                    if($query_run)
                     {
                        foreach($query_run as $row)
                     {
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['fname']; ?> </td>
                           
                                <td> <?php echo $row['famname']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['birthday']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['password']; ?> </td>
                                <td> <?php echo $row['user_type']; ?> </td>
                                <td> <?php echo $row['salary']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-primary editbtn" data-toggle="modal" > EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                       
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>

               </div>
            
            </div>
         </div>
      </div>
            </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
               
                $('#famname').val(data[2]);
                $('#phone').val(data[3]);
                $('#birthday').val(data[4]);
                $('#email').val(data[5]);
                $('#password').val(data[6]);
                $('#type').val(data[7]);
                $('#salary').val(data[8]);
            });
        });
    </script>

   
   </body>
   </html>
