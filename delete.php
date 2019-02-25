<?php
if (isset($_GET["id"])){
$conn = mysqli_connect("localhost", "root", "", "nakuru");
extract($_GET);
$sql="delete from employees where id=$id";
mysqli_query($conn,$sql);

}
header("location:fetch.php");
//git init
//git add .
//git commit -m"php basic files"
//git config user.name "Njeri"
//git config user.email "evelynekamau44@gmail.com"

