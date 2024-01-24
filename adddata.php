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
</head>


<body>
    <?php
    if(isset($_REQUEST["mode"])){
        if($_REQUEST["mode"]=="alr"){
            echo"<script>alert('Alredy Reserved')</script>";
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
                <h4><a href="adddata.php"  style="color:gray">Add Data</a></h4>
                <h4><a href="viewAdd.php">View Addmission</a></h4>
                <h4><a href="addfee.php">Add Fees</a></h4>
                <h4><a href="request.php">Requests</a></h4>

            </div>
        </div>
        <ul>
            <label for="uncheck" id="uncheckbtn"><i class="fa-regular fa-circle-xmark"></i></i></label>
            <li><a href="adddata.php">Add Data</a></li>
            <li><a href="viewAdd.php">View Addmission</a></li>
            <li><a href="addfee.php">Add Fees</a></li>
            <li><a href="request.php">Requests</a></li>
        </ul>

        <!-- <div class="content">
            
          
        </div> -->
        <div class="heading" >
            <h2>Add Student Info</h2>
            <img src="underline.png" alt="">
        </div>
        
        
        <div class="bookseat">
            
            <form action="addmisioncode.php" method="POST">
             
                <div class="seatno"><label for="">Seat No(1-74)</label></div>
                <div class="txt"><input type="text" value="" name="no"id="seatno" required="required" ></div>
                <div class="seatno"><label for="">Enter Name</label></div>
                <div class="txt"><input type="text" name="name" required="required"></div>
               <div class="seatno"><label for="">Enter Mobile Number</label></div>
                <div class="txt"><input type="text" name="mobile"  pattern="^[789]\d{9,9}$" required="required"></div>
                <div class="seatno"><label for="">Enter Email</label></div>
                <div class="txt"><input type="email" name="email"></div>
            
                <div class="seatbtn"><button>Submit</button></div>
                
            </form>

        </div>
        


        




        
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