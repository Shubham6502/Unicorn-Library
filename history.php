<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Unicorn</title>
    <style>
        @media (max-width:600px) {
        .view{
            margin:0;
        }
        .viewname1{
            max-width:30%;
            margin:0;
            padding:0;

        }
        .viewname{
            width:31%;
            margin:0;
            padding:0;
        }
    }
        </style>
</head>

<body>
<?php
    if(isset($_REQUEST["mode"])){
        if($_REQUEST["mode"]=="accept"){
            echo"<script>alert('Accepted')</script>";
        }
        if($_REQUEST["mode"]=="decline"){
            echo"<script>alert('Decline')</script>";
        }

    }
    ?>


    <div class="main">
        <div class="main-con">
        <div class="nav">

            <div class="nav-logo">
                <img src="unicorn.png">
                <span>Unicorn</span>
            </div>
            <input type="submit" name="" id="check" value="" onclick="return check();">
            <input type="submit" name="" id="uncheck" value="" onclick="return uncheck();">
            <label for="check" id="checkbtn"><i class="fa-solid fa-bars"></i></label>
           
            
            <div class="nav-menu">
                <h4><a href="adddata.php">Add Data</a></h4>
                <h4><a href="viewAdd.php" >View Addmission</a></h4>
                <h4><a href="addfee.php">Add Fees</a></h4>
                <h4><a href="request.php"  style="color:gray">Requests</a></h4>

            </div>
        </div>
        <ul>
            <label for="uncheck" id="uncheckbtn"><i class="fa-regular fa-circle-xmark"></i></i></label>
            <li><a href="adddata.php">Add Data</li>
            <li><a href="viewAdd.php">View Addmission</a></li>
            <li><a href="addfee.php">Add Fees</a></li>
            <li><a href="request.php">Requests</a></li>
        </ul>

        <!-- <div class="content">
            
          
        </div> -->
        <div class="heading" >
            <h2>Deleted History</h2>
            <img src="underline.png" alt="">
        </div>
        
        <div class="view">
            <div class="viewname1">Seat NO</div>
            <div class="viewname">Name</div>
            <div class="viewname" >Mobile</div>
       
            
         
           
            </div>
    <?php
    include("connection.php");
    $q="select * from deleted ";
    if($res=mysqli_query($con,$q)){
        while($row=mysqli_fetch_array($res)){

    ?>
               <div class="view">
            <div class="viewname1"><?php  echo $row[0]?></div>
            <div class="viewname"><?php  echo $row[1]?></div>
            <div class="viewname"><?php  echo $row[2]?></div>
           
          
            

            </div>

          
       
<?php
    }
}?>


        


     


        
        <script>
            function check() {
               
                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:0}")
                return true;
            }
            function uncheck(){
               
                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:-120%}")
                return true;

            }
        </script>
        </div>
        <div class="foot">
            @All Copyright Reserved By Shubham Patil
        </div>
    </div>






</body>

</html>