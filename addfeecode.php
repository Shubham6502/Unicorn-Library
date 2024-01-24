<?php
include("connection.php");

$seatno=$_POST["no"];
$fee=$_POST["fee"];
$month=$_POST["month"];
$remark=$_POST["remark"];
$year=$_POST["year"];

$s="select * from admission where seatno=$seatno";
if($res=mysqli_query($con,$s)){
    if($row=mysqli_fetch_array($res))
    {
        if($row[0]==$seatno)
        {
            $q="insert into fee value($seatno,$fee,'$month','$remark',$year)";
          if(mysqli_query($con,$q)){
            header("Location:addfee.php?");

                }
                else{
                    header("Location:addfee.php?mode=not");

                }

        }
    }
    else{
        header("Location:addfee.php?mode=not");

    }
}

