<?php
include("connection.php");
$seatno=$_REQUEST["no"];



$s="select * from seat where no=$seatno";
if($res=mysqli_query($con,$s)){
    if($row=mysqli_fetch_array($res)){
        $name=$row[1];
        $mobile=$row[2];
    }
}

$p="insert into deleted values($seatno,'$name','$mobile')";
if(mysqli_query($con,$p)){
    Header("Location:request.php");
}

$q="delete from admission where seatno=$seatno";

if(mysqli_query($con,$q)){
    header("Location:viewAdd.php? mode=delete");
    
}
?>