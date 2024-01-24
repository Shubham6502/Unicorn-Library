<?php
include("connection.php");
$uname=$_POST["email"];
$pass=$_POST["password"];

$q="select * from adminlogin where email='$uname'";
if($res=mysqli_query($con,$q)){
    if($row=mysqli_fetch_array($res)){
        if($row[1]==$pass){
            header("Location:adddata.php");
            
            
        }
    }
}

?>