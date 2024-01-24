<?php

include("connection.php");
$no=$_REQUEST["no"];
$mobile=$_REQUEST["mo"];

$s="select * from seat where no=$no AND mobile=$mobile";
if($res=mysqli_query($con,$s)){
    if($row=mysqli_fetch_array($res)){
        $name=$row[1];
       
    }
}
$p="insert into deleted values($no,'$name','$mobile')";
if(mysqli_query($con,$p)){
    Header("Location:request.php");
}
$q="delete from seat where no=$no AND mobile=$mobile";
if(mysqli_query($con,$q)){
    header("Location:request.php?mode=decline");
}







?>