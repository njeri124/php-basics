<?php
if(isset($_POST["dob"])) {
    extract($_POST);
    echo "$names $dob $department $address";

    $conn = mysqli_connect("localhost", "root", "", "nakuru");
    $sql= "INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`)
    VALUES (null,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";

    mysqli_query($conn, $sql);




}
?>





    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<?php

require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-sm-5">
        <h3>Add employee</h3>


            <p class="text-success"></p>
            <form action="employee.php" method="post">
                <div class="form-group" >
                    <input type="text" required class="form-control" name="names" placeholder="names">
                </div>
                <div class="form-group" >
                    <input type="text" required class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group" >
                    <input type="text" required class="form-control" name="address" placeholder="address">
                </div>
                <div class="form-group" >
                    <input type="date" required class="form-control" name="dob" placeholder="date of birth">
                </div>
                <div class="form-group" >
                    <input type="text" required class="form-control" name="department" placeholder="department">
                </div>
                <div class="form-group" >
                    <input type="text" required class="form-control" name="kra_pin" placeholder="kra_pin">
                </div>
                <div class="form-group" >
                    <input type="text" required class="form-control" name="salary" placeholder="salary">
                </div>
                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Male" name="gender"> Male</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>






            </form>



        </div>




    </div>
</div>



</body>
</html>