
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=<a href=" index.php" class="btn btn-danger float-end">BACK</a>, initial-scale=1.0"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>


<div class="container">
  <div class="row">
    <div class="col-4">
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header" >Maximum Salary</div>
  <div class="card-body">
    <h5 class="card-title">Max Salary</h5>
    <p class="card-text"><?Php $query = "SELECT max(salary) as `maxsalary` FROM user_form";
                            $res = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($res);
                            echo "Max salary is:" . $data['maxsalary'] ;  
                            ?></p>
  </div>
</div></div>
<div class="col-4">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Minimum Salary</div>
  <div class="card-body">
    <h5 class="card-title">Min Salary</h5>
    <p class="card-text"><?Php $query = "SELECT min(salary) as `minsalary` FROM  user_form";
                            $res = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($res);

                            echo "Minimum salary is:" . $data['minsalary'] ;?></p>
  </div>
</div>
</div>
<div class="col-4">
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Average of Salary</div>
  <div class="card-body">
    <h5 class="card-title">Avg of Salary</h5>
    <p class="card-text"><?Php $query = "SELECT AVG(salary) as `AVGsalary` FROM user_form";
                            $res = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($res);

                            echo "AVG salary is:" . $data['AVGsalary'] ;
                             ?></p>
  </div>
</div>
</div>

 <div class="col-4">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header" >Count of emplyee</div>
  <div class="card-body">
  <h5 class="card-title">Count of emplyee</h5>
    <p class="card-text"><?Php $query = "SELECT count(*) as total from user_form";
                            $res = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($res);

                            echo "Number of students are:" . $data['total']; ?></p>
  </div>
</div></div>
</div>
</div>