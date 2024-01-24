<?php
include("connection.php");
$no=$_POST["no"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$q="insert into seat values($no,'$name','$mobile','$email')";
if(mysqli_query($con,$q)){
    echo"success";
   
}