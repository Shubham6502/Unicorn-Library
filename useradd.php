<?php
include("connection.php");

$no=$_REQUEST["no"];
$name=$_REQUEST["name"];
$mobile=$_REQUEST["mobile"];
$email=$_REQUEST["email"];

    
$q="insert into seat values($no,'$name','$mobile','$email')";
                if(mysqli_query($con,$q)){
                    header("Location:request.html");
                    }  




