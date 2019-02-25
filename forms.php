<?php
//array $_POST
if (isset($_POST["submit"])){
    //$first=$_POST["first"];
    //$second=$_POST["second"];
    extract($_POST);
    $results = $first + $second;

}





?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css ">

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <br><br><br><br>
            <form action="forms.php" method="post">
                <div class="form-group">

                    <input type="number" name="first" step="any"  required min="0" max="1000" placeholder="First number" class="form-control" id="email">
                </div>
                <div class="form-group">

                    <input type="number" name="second" step="any" required min="5" max="3000" placeholder="Second number" class="form-control" id="pwd">
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
            </form>
            <?php
            if (isset($results)){
                echo "<p class='text-center text-danger'>The sum of $first and $second is $results</p>";

            }

            ?>




        </div>




    </div>
</div>












</body>
</html>