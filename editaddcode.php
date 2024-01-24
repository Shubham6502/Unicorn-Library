<?php
include("connection.php");
$no=$_POST["no"];
$mobile=$_POST["mobile"];
$name=$_POST["name"];
$email=$_POST["email"];
 
$q="update admission set seatno=$no,name='$name',mobile='$mobile',email='$email' where seatno=$no";
if(mysqli_query($con,$q)){
    header("Location:viewdata.php?no=$no && mode=edit");
}